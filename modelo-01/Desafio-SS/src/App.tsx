import './global.css'

import { HelmetProvider, Helmet } from 'react-helmet-async'

import { RouterProvider } from 'react-router-dom'
import { router } from './routes'
import {Toaster} from 'sonner'


export function App() {
  return (
    <HelmetProvider>
      <Helmet titleTemplate="%s | GDR"/>
      <Toaster/>
      <RouterProvider router={router}/>
    </HelmetProvider>
  )
}