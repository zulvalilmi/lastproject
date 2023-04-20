import React from "react";

export default function Footer() {
    return (
        <footer className="bg-gray-100 py-10">
        <div className="container mx-auto max-w-5xl flex flex-row  space-x-24">
          <div className="flex-1 space-y-5">
            <img src="/front/tahfidzlogo.png" alt="logo" />
            <div>
              Tahfidzku is a website for record your  <br />
              memorization quran and made you hafidzah.
            </div>
            <div className="flex flex-row">
              <img src="/front/sosmed/facebook.png" alt="facebook icon" className="w-16 h-16" />
              <img src="/front/sosmed/twitter.png" alt="twitter icon" className="w-16 h-16" />
              <img src="/front/sosmed/instagram.png" alt="IG icon" className="w-16 h-16" />
            </div>
            <div>©2023Tahfidzku</div>
          </div>
          <div className="">
            <div className="text-lg font-semibold mb-6">Product</div>
            <ul className="space-y-6 text-sm text-gray-500">
              <li>Setoran</li>
              <li>Locations</li>
              <li>Server</li>
              <li>Countries</li>
              <li>Blog</li>
            </ul>
          </div>
          <div>
            <div className="text-lg font-semibold mb-6">Engage</div>
            <ul className="space-y-6  text-sm text-gray-500">
              <li>Tahfidzku ? </li>
              <li>FAQ</li>
              <li>Tutorials</li>
              <li>Privacy Policy</li>
              <li>Terms of Service</li>
            </ul>
          </div>
          <div>
            <div className="text-lg font-semibold mb-6">Earn Money</div>
            <ul className="space-y-6  text-sm text-gray-500">
              <li>Affiliate</li>
              <li>Become Partner</li>
            </ul>
          </div>
          </div>
          </footer>
    )
}