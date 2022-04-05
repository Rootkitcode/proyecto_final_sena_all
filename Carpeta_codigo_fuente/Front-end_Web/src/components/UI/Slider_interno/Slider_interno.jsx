import React from "react";
import"./slider_interno.css"
export const Slider_interno = ({ img, nom, title, text}) => {
    return (
        <div className="slider-interno">
            <img className="d-block w-100" src={img} alt={nom} />
            <div className="carousel-caption d-none d-md-block">
                <h4>{title}</h4>
                <p>{text}</p>
            </div>
        </div>
    )
}