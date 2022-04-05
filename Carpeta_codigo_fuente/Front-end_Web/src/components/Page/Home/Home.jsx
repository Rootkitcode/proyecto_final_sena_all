import React from "react";
import Informacion from "../../Layout/Informacion/Informacion";
import Servicios from "../../Layout/Servicios/Servicios";
import Main from "../../UI/Main/Main";
import Porque_nostros from "../../UI/Porque_nosotros/Porque_nosotros";
import "./home.css"

function Home() {
  return (
    <div className="Home">
      <div className="container_main">
        <Main/>
      </div>
      <div className="container_info">
        <Informacion/>
      </div>
      <div className="container_servicios">
        <Servicios/>
      </div>
      <div className="container_porque_nosotros">
        <Porque_nostros/>
      </div>

    </div>
  );
}
export default Home;
