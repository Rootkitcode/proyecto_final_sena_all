import React from "react";
import { NavLink } from "react-router-dom";
import { IconContext } from "react-icons"
import "./Navbar.css";

function Navbar() {
  return (
    <div className="Navbar">
      <ul className="navbar-nav mx-auto">
        <li className="nav-item">
          <NavLink className="nav-link" to="/">
            <p>Inicio</p>
          </NavLink>
        </li>
        <li className="nav-item">
          <a className="nav-link" href="#Informacion">
            <p>Informacion</p>
          </a>
        </li>
        <li className="nav-item">
          <a className="nav-link" href="#Servicios">
            <p>Planes</p>
          </a>
        </li>
        <li className="nav-item">
          <NavLink className="nav-link" to="./Para_Desarrolladores">
            <p>Desarrolladores</p>
          </NavLink>
        </li>
        <li className="nav-item">
          <NavLink className="nav-link" to="./Contacto">
            <p>Acerca de nosotros</p>
          </NavLink>
        </li>
      </ul>
    </div>
  );
}

export default Navbar;
