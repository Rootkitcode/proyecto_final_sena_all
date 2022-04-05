import React from "react";
import {ServiciosCard} from "../../UI/Servicios_card/ServiciosCard"
import { Button } from "../../UI/Buttons/Button";
import"./servicios.css"
function servicios(){
    return(
    <div className="container_servicio" id="Servicios">
        <h2 className="title">PLANES</h2>
        <div className="servicios">
            <div className="Servicio">
                <ServiciosCard
                title= "Basic"
                style_card= "styleCard"
                precio="100"
                capacidad= "100"
                numUsuarios="2"
                envios="3"
                />
                
                <Button
                nomClas= "btn-buy"
                textButton= "Buy Now"
                />
            </div>
        
            <div className="Servicio">
                <ServiciosCard
                title= "Professional"
                style_card= "styleCard"
                precio="120"
                capacidad= "150"
                numUsuarios="3"
                envios="5"

                />
                <Button
                nomClas= "btn-buy"
                textButton= "Buy Now"
                />
            </div>

            <div className="Servicio">
                <ServiciosCard
                title= "Master"
                style_card= "styleCard"
                precio="150"
                capacidad= "200"
                numUsuarios="10"
                envios="8"
                />
                <Button
                nomClas= "btn-buy"
                textButton= "Buy Now"
                />
            </div>

        </div> 
    </div>
    )
}
export default servicios;
