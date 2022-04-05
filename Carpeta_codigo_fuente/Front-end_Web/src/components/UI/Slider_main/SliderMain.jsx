import React from "react"
import { Slider_interno } from "../Slider_interno/Slider_interno";
import { Button } from "../Buttons/Button";
import { Slider_indicador } from "../Slider_indicador/Slider_indicador";
import img1 from "../../../Images/img1.jpg";
import img2 from "../../../Images/img2.jpg";
import img3 from "../../../Images/img3.jpg"
import img4 from "../../../Images/img4.jpg"
import img5 from "../../../Images/img5.jpg"
import img6 from "../../../Images/img6.jpg"

import "./sliderMain.css"

const SliderMain = () => {
    return (
        <div className="slider">
            <div id="carouselExampleIndicators" className="carousel slide" data-bs-ride="carousel">

                <div className="carousel-indicators">
                    <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" className="active"></li>
                    <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" ></li>
                    <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
                    <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></li>
                    <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"></li>
                </div>
                <div className="carousel-inner">
                    <div className="carousel-item active">
                        <Slider_interno
                            img={img1}
                            title="Disfruta de tu liberta con Digiturnos"
                            text="Dile NO alas filas "
                        />
                    </div>
                    <div className="carousel-item">
                        <Slider_interno
                            img={img2}
                            title="Disfruta de tu liberta con Digiturnos"
                            text="Dile NO alas filas"
                        />
                    </div>
                    <div className="carousel-item">
                        <Slider_interno
                            img={img3}
                            title="Disfruta de tu liberta con Digiturnos"
                            text="Dile NO alas filas"
                        />
                    </div>
                    <div className="carousel-item">
                        <Slider_interno
                            img={img4}
                            title="Disfruta de tu liberta con Digiturnos"
                            text="Dile NO alas filas"
                        />
                    </div>
                    <div className="carousel-item">
                        <Slider_interno
                            img={img5}
                            title="Disfruta de tu liberta con Digiturnos"
                            text="Dile NO alas filas"
                        />
                    </div>
                    <div className="carousel-item">
                        <Slider_interno
                            img={img6}
                            title="Disfruta de tu liberta con Digiturnos"
                            text="Dile NO alas filas"
                        />
                    </div>
                </div>
                <Button
                    nomClas="carousel-control-prev"
                    control="prev"
                    clasSpan="carousel-control-prev-icon"
                    text="Previous"
                />
                <Button
                    nomClas="carousel-control-next"
                    control="next"
                    clasSpan="carousel-control-next-icon"
                    text="Next"
                />
            </div>
        </div>
    );
}
export default SliderMain
