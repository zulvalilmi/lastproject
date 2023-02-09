import React from "react";

export default function Gallery(){
    return(
        <div className="container grid-rows-2 justify-center items-center mr-2 space-x-2">
            
            <div className="flex flex-wrap gap-5 justify-center">
                <img src="/front/gallery-1.png" alt="galley" className="w-80"/>
                <img src="/front/gallery-2.png" alt="galley" className="w-80"/>
                <img src="/front/gallery-3.png" alt="galley" className="w-80"/>
                <img src="/front/gallery-4.jpg" alt="galley" className="w-80"/>
                <img src="/front/gallery-5.jpg" alt="galley" className="w-80"/>
                <img src="/front/gallery-6.jpg" alt="galley" className="w-80"/>
                <img src="/front/gallery-7.jpg" alt="galley" className="w-80"/>
                <img src="/front/gallery-8.jpg" alt="galley" className="w-80"/>
                <img src="/front/gallery-5.jpg" alt="galley" className="w-80"/>
            </div>
            
        </div>
    )
}