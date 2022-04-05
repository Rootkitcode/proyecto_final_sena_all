import React from "react"
import { Button } from "../../UI/Buttons/Button"
import "./login_register.css"

function Login_register() {
    return (
        <div className="Login_register">
            <Button
                nomClas="register"
                textButton="Register"
            />
            <Button
                nomClas="login"
                textButton="login"
            />
        </div>

    )
}
export default Login_register;
