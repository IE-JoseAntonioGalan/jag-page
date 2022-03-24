import { Outlet, NavLink } from 'react-router-dom'

function template() {
  return (
    <div className='container'>
      <div className="sidebar">
        <NavLink 
          to='/admin/' 
          className={({ isActive }) => ('sidebar__link ' + (isActive ? 'sidebar__link--active' : ''))}
          >
            Dashboard
        </NavLink>
        <NavLink 
          to='news' 
          className={({ isActive }) => ('sidebar__link ' + (isActive ? 'sidebar__link--active' : ''))}
          >
            Noticias
        </NavLink>
        <NavLink 
          to='projects' 
          className={({ isActive }) => ('sidebar__link ' + (isActive ? 'sidebar__link--active' : ''))}
          >
            Proyectos
        </NavLink>
        <NavLink 
          to='events' 
          className={({ isActive }) => ('sidebar__link ' + (isActive ? 'sidebar__link--active' : ''))}
          >
            Eventos
        </NavLink>
        <NavLink 
          to='user' 
          className={({ isActive }) => ('sidebar__link ' + (isActive ? 'sidebar__link--active' : ''))}
          >
            Usuario
        </NavLink>
      </div>
      <div className='container-views'>
        <Outlet />
      </div>
    </div>
  )
}

export default template