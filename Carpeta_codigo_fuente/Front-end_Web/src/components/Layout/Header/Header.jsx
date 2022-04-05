import React from "react";
import Navbar from "../../UI/Navbar/Navbar";
import Logo from "../../UI/Logo/Logo";
import "./header.css";
import Login_register from "../../UI/Login_register/Login_register";

function Header() {
  return (
    <div className="navigation">
      <nav className="navbar navbar-expand navbar-dark bg-custom">
        <div className="container">
          <Logo />
          <div>
            <Navbar />
          </div>
          <div>
            <Login_register />
          </div>
        </div>
      </nav>
    </div>
  );
}

export default Header;
