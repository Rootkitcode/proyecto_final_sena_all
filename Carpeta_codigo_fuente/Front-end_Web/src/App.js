import React from "react";
import { BrowserRouter as Router, Route,Switch } from "react-router-dom";
import Home from './components/Page/Home/Home';
import Footer from "./components/Layout/Footer/Footer"
import Contacto from './components/Page/Contacto/Contacto'
import Header from "./components/Layout/Header/Header";
import './App.css'
function App(){
  return(
    <div className="App">
      <Router>
        <Header/>
        <Switch>
          <Route path="/" exact component={() => <Home />} />
          <Route path="/Contacto" exact component={() => <Contacto />} />
        </Switch>
        <Footer/>
      </Router>
    </div>
  );
}

export default App;
