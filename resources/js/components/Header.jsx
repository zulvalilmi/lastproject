import React from 'react'


export default function Header() {
    const menus = ["About", "Features", "Price", "Testimonial", "Help"];
  return (
    <div className='bg-white'>
        <header className='font-normal container max-w-5xl mx-auto flex flex-row pt-7 items-center space-x-36'>
            <img src="" alt="" />
            <div className='flex-auto'>
                <ul className='flex flex-row space-x-6'>
                {menus.map((val, index) => (
              <li key={index}>{val}</li>
          ))}
                </ul>
            </div>
            <div className='font-medium space-x-6'>
                <button className='font-bold'>Sign In</button>
                <button className='font-bold'>Sign Up</button>
            </div>


        </header>
    </div>
)
}
