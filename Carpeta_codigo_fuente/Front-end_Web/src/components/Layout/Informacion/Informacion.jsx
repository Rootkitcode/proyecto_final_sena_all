import React from "react";
import "./informacion.css"

function informacion() {
    return (
        <div className="informacion" id="Informacion">
            <div className="text-box">
                <h2 className="Titulo">SMS MADS</h2>
            </div>
            <div className="Texto_info">Por medio de este sistema las organizaciones pueden configurar de acuerdo a sus necesidades la gestión de sus clientes, por lo cual pueden personalizar sus mediciones mediante el panel de control, visualizando en todo momento los recursos disponibles.
                El sistema le permite administrar, ver los recursos disponibles y parametrizar, el uso de gráficos en el Panel de control, le permite medir los recursos que la empresa podrá usar para llegar a sus clientes, mediante el uso de mensajes de texto.
                Una característica muy destacada del sistema es la posibilidad de que puedan usar el API DIGITURNO SMS MADS, y también como elemento integrador puedan organizar  la gestión de sus indicadores.
                ¡Solicita ya tu plan y elige la mejor opción para tu empresa!
            </div>
        </div>
    );
}
export default informacion;