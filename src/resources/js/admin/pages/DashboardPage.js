import { useState, useEffect, useRef } from 'react'
import { getSiteInfo, updateSiteInfo } from '../libs/api';

function DashboardPage() {
  const [initValues, setInitValues] = useState({
    school_name: '',
    school_description: '',
    mission: '',
    vision: '',
    values: ''
  })
  const formRef = useRef(null);

  const handleFormSubmit = async (e) => {
    e.preventDefault();
    const formData = new FormData(formRef.current);
    await updateSiteInfo(formData);
    window.alert("Sitio actualizado correctamente")
  }

  const siteInfo = async () => {
    const {data} = await getSiteInfo();
    setInitValues({
      school_name: data.school_name,
      school_description: data.school_description,
      mission: data.mission,
      vision: data.vision,
      values: data.values
    });
  }

  useEffect(() => {
    siteInfo();
  }, []);

  return (
    <div>
      <form ref={formRef} onSubmit={handleFormSubmit}>
        <fieldset className="form-group">
          <legend>Datos basìcos: </legend>

          <div className="input-group">
            <label>
              Nombre de la escuela: <input defaultValue={initValues.school_name} type="text" name="school_name" className="input" />
            </label>
            <label>
              Escudo: <input type="file" name="shield" className="input" />
            </label>
          </div>
          <label>
            Descripciòn: <textarea defaultValue={initValues.school_description} name="school_description" rows="6" className="input"></textarea>
          </label>
        </fieldset>

        <fieldset className="form-group">
          <legend>Acerca de: </legend>

          <label>
            Misión: <textarea defaultValue={initValues.mission} name="mission" rows="8" className="input"></textarea>
          </label>
          <label>
            Vision: <textarea defaultValue={initValues.vision} name="vision" rows="8" className="input"></textarea>
          </label>
          <label>
            Valores: <textarea defaultValue={initValues.values} name="values" rows="8" className="input"></textarea>
          </label>
        </fieldset>

        <button type="submit" className="btn btn-primary">Guardar cambios</button>
      </form>
    </div>
  )
}

export default DashboardPage;
