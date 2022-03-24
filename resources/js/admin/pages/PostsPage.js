import {useEffect, useState} from 'react'
import {Link} from 'react-router-dom'
import { deletePost, getAllPosts } from '../libs/api'

function PostsPage() {
  const path = window.location.pathname.split('/')[2]
  const [posts, setPosts] = useState([]);

  const getPosts = async () => {
    const posts = await getAllPosts(path);
    setPosts(posts);
  }

  const handleDeletePost = (postId) => {
    deletePost(postId, path);
    getPosts();
  }
  
  useEffect(() => {
    getPosts();
  }, [path])

  return (
    <div>
      <Link to={'/admin/'+path+'/form'} className="btn btn-primary">Crear publicaciòn</Link>
      <table className="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>thumbnail</th>
            <th>Titulo</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          {posts.map((item) => (
            <tr key={item.id}>
              <td>{item.id}</td>
              <td>{item.thumbnail}</td>
              <td>{item.title}</td>
              <td>{item.status == 'erased' ? 'Borrador' : 'Publicado'}</td>
              <td><Link to={'form/'+item.id}>Editar</Link> <button onClick={() => handleDeletePost(item.id)}>Eliminar</button></td>
            </tr>
          ))}
          
        </tbody>
      </table>
    </div>
  )
}

export default PostsPage