import {useForm} from 'react-hook-form'
import { Helmet } from "react-helmet-async"
import {z} from 'zod'

import { Button } from "../../components/ui/button"
import { Label } from "../../components/ui/label"
import { Input } from "../../components/ui/input"
import { Link } from 'react-router-dom'

const cadastroForm = z.object({
    nome: z.string(),
    email: z.string().email(),
    senha: z.string()
})

type cadastroForm = z.infer<typeof cadastroForm>

export function Cadastro() {
    const { register, handleSubmit, formState: {isSubmitting}} = useForm<cadastroForm>()

    async function handlecadastro(data: cadastroForm) {
        console.log(data)
        await new Promise((resolve) => setTimeout(resolve,2000))
    }
    return (
        <>
            <Helmet title="Cadastro"/>
           
           <div className="p-8">
                <div className="w-[350px] flex flex-col justify-center gap-6">
                    <div className="flex flex-col gap-2 text-center">
                        <h1 className="text-2xl font-semibold tracking-tight">Criar conta</h1>
                        
                    </div>
                    <form  onSubmit={handleSubmit(handlecadastro)} className="space-y-4">
                        <div className="space-y-2">
                            <Label htmlFor="nome">Seu email</Label>
                            <Input type="text" id="nome" {...register('nome')} required/>
                        </div>

                        <div className="space-y-2">
                            <Label htmlFor="email">Seu email</Label>
                            <Input type="email" id="email" {...register('email')} required/>
                        </div>

                        <div className="space-y-2">
                            <Label htmlFor="senha">Sua senha</Label>
                            <Input type="password" id="senha" {...register('senha')} required/>
                        </div>

                        <Button type="submit" disabled={isSubmitting}>Finalizar</Button>
                        <Button asChild className='m-3'>
                            <Link to="/sign-in">
                                Cancelar
                            </Link>
                        </Button>
                    </form>
                </div>
           </div>
            
        </>
    )
   
}
    