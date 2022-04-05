import React from "react";
import "./section.css"
export const Section = ({ sub_titulo1, texto1, texto2,texto3, titulo_section,sub_titulo2,sub_titulo3}) => {
    return (
        <section className="section bg-c-light">
            <div className="container_navbar">

                    <div className="col-md-12 mb-5 text-center">
                        <h3 className="Quienes-somos">{titulo_section}</h3>
                        <div className="acerca_nosotros mx-auto">
                            <div className="col-md-4">
                                <h6>{sub_titulo1}</h6>
                                <p>{texto1}</p>
                            </div>
                            <div className="col-md-4">
                                <h6>{sub_titulo2}</h6>
                                <p>{texto2}</p>
                            </div>
                            <div className="col-md-4">
                                <h6>{sub_titulo3}</h6>
                                <p>{texto3}</p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    )
}
