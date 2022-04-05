import React from "react";
import Logo from "../../UI/Logo/Logo";
import Integrantes from "../Integrantes/Integrantes";
import "./textoFooter.css"
function TextoFooter(){
    return(

        <footer className="footer">
            <div className="container_footer">
                <div className="servicios">
                <Logo/>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A quae suscipit vitae, rem at blanditiis qui velit modi error fugit! Sunt atque autem ipsum distinctio asperiores, necessitatibus ullam aperiam ab?</p>
            </div>
            <div className="copyrigh">Copyright &copy; 2022</div> 
            <div className="Integrantes">
                <Integrantes/>
            </div> 
            </div>
            <div className="box_copyrigh">
                <hr/>
                <p>Todos los derechos reservados &copy; 2022-
                    <b>Digiturno</b></p>
            </div> 
        </footer>
)
}export default TextoFooter;