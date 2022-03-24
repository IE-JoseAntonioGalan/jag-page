import React from 'react'
import { Routes, Route } from 'react-router-dom'
import './app.css'

import UserPage from './pages/UserPage'
import DashboardPage from './pages/DashboardPage'
import LoginPage from './pages/LoginPage'
import Templete from './components/template'
import PostsPage from './pages/PostsPage'
import PostFormPage from './pages/PostFormPage'

function App() {

  return (
      <Routes>
        <Route path='/admin' element={<Templete/>}>
          <Route index element={<DashboardPage/>} />
          <Route path='login' element={<LoginPage />} />

          <Route path='create' element={<UserPage/>} />

          <Route path='news' element={<PostsPage />} />
          <Route path='projects' element={<PostsPage />} />
          <Route path='events' element={<PostsPage />} />

          <Route path='news/form' element={<PostFormPage />} />
          <Route path='news/form/:postId' element={<PostFormPage />} />
          <Route path='projects/form' element={<PostFormPage />} />
          <Route path='projects/form/:postId' element={<PostFormPage />} />
          <Route path='events/form' element={<PostFormPage />} />
          <Route path='events/form/:postId' element={<PostFormPage />} />
        </Route>
      </Routes>
  )
}

export default App