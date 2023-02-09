import React from 'react'

export default function Header() {
    const menus = ["About", "Features", "Price", "Testimonial", "Help"];
  return (
        <header className='font-normal container max-w-6xl mx-auto flex flex-row pt-7 items-center space-x-35'>
            <img src="/front/tahfidzlogo.png" alt="" className='w-35' />
            <div className='flex-1'>
                <ul className='flex flex-row space-x-6'>
                {menus.map((val, index) => (
              <li key={index}>{val}</li>
          ))}
                </ul>
            </div>
            <div className='font-medium space-x-6'>
                <a href="/login" className='font-bold'>Sign In</a>
                <a href="/register" className='text-default border border-default rounded-full py-2 px-10'>Sign Up</a>
            </div>
        </header>

)
}
