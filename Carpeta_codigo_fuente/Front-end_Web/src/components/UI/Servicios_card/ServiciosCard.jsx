import React from "react";
import"./servicios.css" 

export const ServiciosCard = ({ title, style_card, precio, capacidad, numUsuarios, envios }) => {
    return (
        <div className={style_card} >{title}
            <div className="container_ser">
                <div className="container_precio">
                    <p>$ {precio} </p>
                </div>
                <hr className="hrCard"/>
                <p>{capacidad}GB Storage</p>
                <hr className="hrCard"/>
                <p>{numUsuarios} User Allowed</p>
                <hr className="hrCard"/>
                <p>Send up to {envios} GB</p>
            </div>
        </div>
    )
}