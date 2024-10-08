import { createBrowserRouter } from "react-router-dom"
import {Signin} from "./pages/auth/sign-in"
import { Home } from "./pages/app/home"
import { AppLayout } from "./pages/_layouts/app"
import { AuthLayout } from "./pages/_layouts/auth"
import { Cadastro } from "./pages/auth/cadastro"

export const router = createBrowserRouter([
    
    {
        path: '/',
        element: <AppLayout />,
        children: [{path: '/', element: <Home />}],
    },

    {
        path: '/',
        element: <AuthLayout />,
        children: [{path: '/sign-in', element: <Signin />},
            {path: '/cadastro', element: <Cadastro />}
        ],
    },

    
])