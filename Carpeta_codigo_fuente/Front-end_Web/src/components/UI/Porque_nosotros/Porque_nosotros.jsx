import React from "react";
import porque from "../../../Images/porque1.jpg"
import { Section } from "../Section/Section";
import { Slider_interno } from "../Slider_interno/Slider_interno";
import "./porque_nosotros.css"
const Porque_nostros = () => {
    return (
        <div className="porque_nosotros">
            <Slider_interno
                img={porque}
            />
            <section className="section bg-c-light">
            <Section
                titulo_section="Porque con nosotros"
                sub_titulo1="Soporte 24/7"
                texto1="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae quod debitis excepturi sed iusto nemo quibusdam qui esse similique harum sunt ipsam suscipit, maiores dolore consequatur illo provident. Modi, molestias."
                sub_titulo2="Web service"
                texto2="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae quod debitis excepturi sed iusto nemo quibusdam qui esse similique harum sunt ipsam suscipit, maiores dolore consequatur illo provident. Modi, molestias."
                sub_titulo3="Panel administrativo"
                texto3="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae quod debitis excepturi sed iusto nemo quibusdam qui esse similique harum sunt ipsam suscipit, maiores dolore consequatur illo provident. Modi, molestias."
            />

            </section>
        </div>
    );
}
export default Porque_nostros