import Editor from '@monaco-editor/react'
import {useRef, useState, useEffect} from 'react'
import { useNavigate, useParams } from 'react-router-dom';

import  {savePost, getPostsForId, updatePost} from '../libs/api'

function PostFormPage() {
  const path = window.location.pathname.split('/')[2]
  const {postId} = useParams();
  const navigate = useNavigate();
  const formRef = useRef(null);
  const [markdown, setMarkdown] = useState('');
  const [initValues, setInitValues] = useState({
    title: '',
    status: '',
    content: ''
  })

  const getData = async() => {
    const response = await getPostsForId(postId, path);
    setInitValues({
        title: response.data.title,
        status: response.data.status,
        content: response.data.content
    })
  }

  const handleEditorMount = (editor, monaco) => {
    setMarkdown(editor.getValue())
  }

  const handleEditorChange = (value) => {
    setMarkdown(value);
  }

  const handleSubmitForm = async (e) => {
    e.preventDefault();
    const formData = new FormData(formRef.current);
    formData.append('content', markdown);
    if (postId) {
      await updatePost(formData, postId, path);
    }else{
      await savePost(path, formData);
    }

    navigate('/admin/' + path)
  }

  useEffect(() => {
    if (postId) {
      getData();
    }
  }, [])

  return (
    <div>
      <form ref={formRef} onSubmit={handleSubmitForm}>
        <fieldset className="form-group">
              <legend>{postId ? 'Actualizar' : 'Crear'} Publicación: </legend>
              <div className="input-group">
                <label>
                  Titulo: <input defaultValue={initValues.title} name="title" type="text" className="input" />
                </label>
                <label>
                  Miniatura: <input name="thumbnail" type="file" className="input" />
                </label>
                <label>
                  Estado: <select defaultValue={initValues.status} name="status" className='input'>
                            <option value="published">Publicar</option>
                            <option value="eraser">Borrador</option>
                          </select>
                </label>
                <button className='btn btn-primary'>{postId ? 'Actualizar' : 'Crear'} Pulicacion</button>
              </div>
              <label>
                Contenido: <Editor onMount={handleEditorMount} defaultValue={initValues.content} onChange={handleEditorChange} height="500px" width="100%" language='markdown' theme='vs-dark'/>
              </label>
          </fieldset>
          
      </form>
    </div>
  )
}

export default PostFormPage