import React from 'react'

export const Button = ({ control, nomClas,clasSpan,text,textButton}) => {
    return (
        <button className={nomClas} href="#carouselExampleIndicators" role="button" data-bs-slide={control}> {textButton}
            <span className={clasSpan} aria-hidden="true"></span>
            <span className="sr-only">{text}</span>
        </button>
    )
}
