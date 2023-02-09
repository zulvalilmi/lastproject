import React from "react";
import Gusers from "./gusers";
import Gmaps from "./Gmaps";
import TitleDesc from "./TitleDesc";
import Gallery from "./Gallery";

export default function Main() {
    const section3 = [
    {
      icon: Gusers,
      lable: "maps",
      total: "30+",
    },
    {
      icon: Gmaps,
      lable: "users",
      total: "30+",
    },
    {
      icon: <img src="/front/servers.png" alt="serves" />,
      lable: "server",
      total: "30+",
    },
  ];
    const features = [
      "Safety",
      "Grafik Data",
      "Can To use Without Internet",
      "Quickly",
    ];
    return (
        <main>
        <div className="container max-w-6xl mx-auto grid grid-cols-2 py-10">
          <div>
          <h1 className="font-bold text-5xl pb-10 pt-16">
          Build a Generation of
          <br /> 
          Qur’an with Tahfidzku
          </h1>
          <div className="font-normal text-small pb-12">
          Focus your life only on the Qur'an and Tahfidzku helps you 
          to record all your memorization. With experienced tahfidz teachers in their fields. 
          continue to improve your memorization in tahfidzku
          </div>
          <a href="/login" className="py-4 px-16 bg-default rounded-md text-white drop-shadow-3xl">
            Get Started
          </a>
          </div>
          <div>
            <img src='/front/anak.png' alt="ulistration-Tahfidzku" />
          </div>
        </div>
        <div className="container max-w-5xl mx-auto grid grid-cols-3 shadow-2xl rounded-md py-4">
              <div className="flex flex-row py-4  space-x-6 justify-center border-r border-gray-200">
                <div className="rounded-full bg-red-100 p-3 ">
                  <img alt="maps" src="/front/love.png" className="w-6 h-6" />
                </div>
                <div>
                  <div>10+</div>
                  <div>Ustadzah</div>
                </div>
              </div>

              <div className="flex flex-row py-4  space-x-6 justify-center border-r border-gray-200">
                <div className="rounded-full bg-red-100 p-3 ">
                  <img alt="users" src="/front/users.png" className="w-6 h-6" />
                </div>
                <div>
                  <div>30+</div>
                  <div>Santri</div>
                </div>
              </div>
              <div className="flex flex-row py-4  space-x-6 justify-center border-r border-gray-200">
                <div className="rounded-full bg-red-100 p-3 ">
                  <img alt="maps" src="/front/servers.png" className="w-6 h-6" />
                </div>
                <div>
                  <div>10+</div>
                  <div>Class</div>
                </div>
              </div>
        </div>
        <div className="container max-w-5xl mx-auto grid grid-cols-2 py-24">
          <img alt="ilustration-quran" src="/front/il.png" />

          <div className="px-16 space-y-4">
          <h1 className="font-bold text-3xl">
            Want anything to be easy
            with Tahfidzku.
          </h1>
          <div className="text-sm">
              You can explore the features that we provide with fun and have
              their own functions each feature.
          </div>
          {features.map((val,index) => {
            return (
              <div className="flex items-center space-x-3" key={index}>
                <img src="/front/Check.png" alt="Check-features" className="w-6 h-6" />
                <div className="text-sm">{val}</div>
              </div>
            );
          })}
        </div>
        </div>
        <div className="bg-gray-50 py-10">
          <TitleDesc
          title={"Gallery"}
          desc={`You can Do it to Memorization The Qur'an `}
           />
            <Gallery />

        </div>
      </main>
    )
}