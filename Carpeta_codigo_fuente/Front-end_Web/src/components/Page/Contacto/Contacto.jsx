import React from "react";
import Acerca_de_nosotros from "../../UI/Acerca_de_nosotros/Acerca_de_nosotros";
import img_servicios from "../../../Images/img_inicio.jpg"
import  SliderMain  from "../../UI/Slider_main/SliderMain"
import "./contacto.css"
function Contacto() {
return (
    <div className="Contacto">
        <div class="container_acerca_de_nosotros">
            <SliderMain/>
        </div>
        <div className="container_navbar">
            <Acerca_de_nosotros/>
        </div>
    </div>
);
}

export default Contacto;