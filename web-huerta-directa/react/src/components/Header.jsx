import React, { useState } from "react";

import menuIcon from "/menu.png";
import cartIcon from "/car.svg";
import heroImage from "/rigth.png";

const Header = () => {
  // Estado para manejar la visibilidad del menú en dispositivos móviles
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  return (
    <header className="bg-orange-800 flex items-center min-h-[70vh] py-[100px] font-poppins relative">
      <div className="container mx-auto px-4">
        {/* --- Menú de Navegación --- */}
        <div className="absolute top-0 left-0 right-0 flex items-center justify-between p-6 lg:px-0 lg:py-5 container mx-auto">
          <a
            href="#"
            className="text-brand-green text-2xl font-semibold uppercase transition-colors duration-500 hover:text-brand-green-hover hidden lg:block"
          >
            Huerta directa
          </a>

          {/* Icono de Hamburguesa para móvil */}
          <label
            htmlFor="menu-toggle"
            className="cursor-pointer lg:hidden"
            onClick={() => setIsMenuOpen(!isMenuOpen)}
          >
            <img src={menuIcon} className="w-6" alt="menu" />
          </label>
          <input type="checkbox" id="menu-toggle" className="hidden" />

          {/* Navegación Principal */}
          <nav
            className={`absolute lg:relative top-full left-0 right-0 bg-brand-text lg:bg-transparent ${
              isMenuOpen ? "block" : "hidden"
            } lg:block`}
          >
            <ul className="flex flex-col lg:flex-row">
              <li>
                <a
                  href="login-20250405T183650Z-001/login/pagina.html"
                  className="text-lg p-5 block text-white lg:text-brand-text font-semibold transition-colors duration-300 hover:text-brand-gray"
                >
                  Inicio
                </a>
              </li>
              <li>
                <a
                  href="Errores/error404.html"
                  className="text-lg p-5 block text-white lg:text-brand-text font-semibold transition-colors duration-300 hover:text-brand-gray"
                >
                  Servicios
                </a>
              </li>
              <li>
                <a
                  href="Errores/error500.html"
                  className="text-lg p-5 block text-white lg:text-brand-text font-semibold transition-colors duration-300 hover:text-brand-gray"
                >
                  Contactos
                </a>
              </li>
              <li>
                <a
                  href="./pagina_principal/landing.html"
                  className="text-lg p-5 block text-white lg:text-brand-text font-semibold transition-colors duration-300 hover:text-brand-gray"
                >
                  Nosotros
                </a>
              </li>
              <li>
                <a
                  href="Quienes_somos/quienes_somos.html"
                  className="text-lg p-5 block text-white lg:text-brand-text font-semibold transition-colors duration-300 hover:text-brand-gray"
                >
                  Somos
                </a>
              </li>
            </ul>
          </nav>

          {/* Icono y Dropdown del Carrito */}
          <div className="relative group">
            <img
              src={cartIcon}
              alt="Carrito de compras"
              className="w-7 cursor-pointer"
            />
            <div
              id="carrito"
              className="hidden group-hover:block absolute top-full right-0 z-10 p-5 bg-[#4e4b5076] backdrop-blur-md min-w-[340px] md:min-w-[400px]"
            >
              <table className="w-full text-white">
                <thead>
                  <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  {/* Las filas del carrito se agregarían aquí dinámicamente */}
                </tbody>
              </table>
              <a
                href="#"
                className="inline-block mt-4 py-2 px-4 text-white bg-brand-green rounded-md text-sm transition-colors duration-300 hover:bg-brand-green-dark"
              >
                Vaciar carrito
              </a>
            </div>
          </div>
        </div>

        {/* --- Contenido del Header (Hero Section) --- */}
        <div className="flex flex-col lg:flex-row items-center mt-20 lg:mt-0 text-center lg:text-left">
          <div className="lg:w-1/2">
            <h1 className="text-brand-text text-5xl font-bold leading-tight mb-6">
              Frutas y verduras
            </h1>
            <p className="text-brand-text text-lg mb-11">
              En Huerta Directa, te conectamos con productos campesinos frescos
              y de calidad, cosechados directamente por manos locales. Disfruta
              de alimentos 100% naturales, sin intermediarios y al mejor precio.
              ¡Comer sano y apoyar al campo nunca fue tan fácil!
            </p>
            <a
              href="#"
              className="inline-block py-4 px-6 text-white bg-green-600 rounded-full capitalize transition-colors duration-300 hover:bg-green-800"
            >
              Informacion
            </a>
          </div>
          <div className="lg:w-1/2 mt-5 lg:mt-0 flex justify-center">
            <img
              src={heroImage}
              alt="Frutas y verduras frescas"
              className="w-[300px] lg:w-[400px] transition-transform duration-300 ease-in-out hover:-translate-y-2.5"
            />
          </div>
        </div>
      </div>
    </header>
  );
};

export default Header;
