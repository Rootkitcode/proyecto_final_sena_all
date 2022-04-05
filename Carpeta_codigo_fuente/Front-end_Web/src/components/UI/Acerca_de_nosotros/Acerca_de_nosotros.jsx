import React from "react";
import { NavLink } from "react-router-dom";
import "./acerca_de_nosotros.css";
import { Link } from "react-router-dom"
import { Section } from "../Section/Section";

function Acerca_de_nosotros() {
    return (
        <div>
            <section className="Acerca_de_nosotros">
                <div className="container_navbar">
                    <div className="row">
                        <div className="col-md-12 text-center">
                            <h3 className="Quienes-somos"> Quienes somos</h3>
                            <div className="underline mx-auto">
                                <p>
                                A medida que la tecnología avanza, se va dejando de lado, el impacto visual que tienen las largas filas en establecimientos privados y públicos, y que en la actualidad puede representar un riesgo inminente en la salud y la vida de cada una de las personas que están presente en ellas. 
                                Desde el punto de vista cultural,el impacto es grande en gran parte del país, las filas y los largos tiempos de espera, puede representar malestar ocasionando que los turnos de atención se pierdan, lo que representa en muchas organizaciones, la pérdida de  ganancias ya que una de sus actividades principales, es la recepción de personas para la atención de sus solicitudes.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div className="col-md-12 mb-5 text-center">
                <h3 className="mision_vision">Misión y visión</h3>
                <div className="container_m_v ">
                    <div className="x4">
                        <h6>Mision</h6>
                        <p>DIGITURNOS SMS MADS, es una empresa líder, pionera en la implementación de soluciones, para ayudar a las organizaciones en la optimización de cada uno de sus indicadores de gestión de clientes .</p>
                    </div>
                    <div className="x4">
                        <h6>vision</h6>
                        <p>Al culminar la segunda década del siglo XXI, para el año 2030, la empresa será líder en la implementación de soluciones, en empresas y la optimización de indicadores de gestión de cliente e indicadores de servicio, mediante la implementación de nuestros servicios.</p>
                    </div>
                </div>
            </div>
            <div className="Valores_corporativos">
                <h4 className="titulo_valores"> Valores corporativos</h4>
                <div className="responsabilidad">
                    <div className="x4">
                        <h5>Responsabilidad</h5>
                        <p>Este es uno de los valores más representativos de la empresa que permita dar confianza a los usuarios que usan el WEB SERVICE, de DIGITURNOS SMS MADS, que además integra diferentes herramientas tecnológicas, asegurando en todo momento la información de manera responsable de cada uno de sus usuarios, de esta manera se puede brindar un producto, que esté enmarcado en las normas internacionales de uso de la información de las personas.</p>
                    </div>
                    <div className="x4">
                        <h5>Respeto</h5>
                        <p>Uno de los pilares para la puesta en marcha del nuestro WEB SERVICE es el reconocimiento y el respeto de cada una de las funciones, para las cuales se concibe el uso del software, y tener presente, que tanto usuarios, como el negocio confían en una mutua cooperación, identificando fallas que desde el punto de vista de usuarios y empresa alimentando la gestión de indicadores para las compañías</p>
                    </div>
                    <div className="x4">
                        <h5>Privacidad</h5>
                        <p> Desde el momento que el usuario entra en contacto con la aplicación, se identifica manejo de datos que son de suma importancia tanto para el usuario como para la misma empresa, ya que este es el insumo fundamental, por eso nuestros servicios cuenta con un sistema de seguridad que le permite, que los datos de cada uno de los usuarios, sea conservado de manera segura y cada uno de los registros que ingresa en las bases de datos. </p>
                    </div>
                    <div className="x4">
                        <h5>Compromiso</h5>
                        <p>Cada una de las funciones con las que cuenta el WEB SERVICE está pensada para que el cliente pueda adaptar a cada uno de sus procesos, los estándares de medición y gestión de servicio.</p>
                    </div>
                </div>
            </div>
        </div>
    );
}
export default Acerca_de_nosotros;