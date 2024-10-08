
import { Helmet } from "react-helmet-async"
import { Link, useNavigate } from 'react-router-dom'

//http://localhost/Desafio-SSDGT/modelo-01/Desafio-SS/backend/processa_login_usuario.php
import { Button } from "../../components/ui/button"
import { Label } from "../../components/ui/label"
import { Input } from "../../components/ui/input"
import { useState } from "react"

export function Signin() {

    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const navigate = useNavigate();

    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();

        // Fazer a requisição ao backend para login
    fetch('http://localhost/Desafio-SSDGT/modelo-01/Desafio-SS/backend/processa_login_usuario.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({
          action: 'login',
          email: email,
          password: password,
        }),
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.message === 'login feito') {
            // Redirecionar para a página Home após login
            navigate('/home');
          } else {
            console.log(data.message);
          }
        })
        .catch((error) => {
          console.error('Erro:', error);
        });
    };
    



    return (
        <>
            <Helmet title="Login"/>
           
           <div className="p-8">
                <div className="w-[350px] flex flex-col justify-center gap-6">
                    <div className="flex flex-col gap-2 text-center">
                        <h1 className="text-2xl font-semibold tracking-tight">Acessar sua conta</h1>
                        
                    </div>
                    <form   className="space-y-4" onSubmit={handleSubmit}>
                        <div className="space-y-2">
                            <Label htmlFor="email">Seu email</Label>
                            <Input type="email" id="email" value={email} onChange={(e) => setEmail(e.target.value)}  required/>
                        </div>

                        <div className="space-y-2">
                            <Label htmlFor="senha">Sua senha</Label>
                            <Input type="password" id="senha" value={password} onChange={(e) => setPassword(e.target.value)} required/>
                        </div>

                        <Button type="submit">Entrar</Button>
                        <Button asChild className='m-3'>
                            <Link to="/cadastro">
                                Cadastrar
                            </Link>
                        </Button>
                        
                    </form>
                </div>
           </div>
            
        </>
    )
}
    