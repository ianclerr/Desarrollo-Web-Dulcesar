<!--
  README “web-ecommerce”
  Autor: Ian Cler Renaud (clerrenaud.ian@gmail.com)
  Repo: https://github.com/ianclerr/web-ecommerce
-->

<!-- HERO -->
<p align="center">
  <img src="https://laravel.com/img/logomark.min.svg" width="70" alt="Laravel" />
  &nbsp;&nbsp;
  <img src="https://cdn.worldvectorlogo.com/logos/tailwind-css-2.svg" width="90" alt="Tailwind CSS" />
  &nbsp;&nbsp;
  <img src="https://www.postgresql.org/media/img/about/press/elephant.png" width="80" alt="PostgreSQL" />
</p>

<h1 align="center">Web & Ecommerce — Paraguay 🇵🇾</h1>
<p align="center">
  Plataforma web y ecommerce para una empresa paraguaya de alto reconocimiento nacional.
  <br/>Construida con <b>Laravel</b>, <b>Tailwind CSS</b> y <b>PostgreSQL</b>.
</p>

<p align="center">
  <a href="https://github.com/ianclerr/web-ecommerce/stargazers">
    <img alt="GitHub stars" src="https://img.shields.io/github/stars/ianclerr/web-ecommerce?style=for-the-badge">
  </a>
  <a href="https://github.com/ianclerr/web-ecommerce/network/members">
    <img alt="GitHub forks" src="https://img.shields.io/github/forks/ianclerr/web-ecommerce?style=for-the-badge">
  </a>
  <a href="https://github.com/ianclerr/web-ecommerce/issues">
    <img alt="GitHub issues" src="https://img.shields.io/github/issues/ianclerr/web-ecommerce?style=for-the-badge">
  </a>
  <a href="#">
    <img alt="Status" src="https://img.shields.io/badge/status-WIP-ff7f50?style=for-the-badge&logo=semanticrelease&logoColor=white">
  </a>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11.x-ff2d20?style=flat&logo=laravel&logoColor=white" />
  <img src="https://img.shields.io/badge/TailwindCSS-3.x-38bdf8?style=flat&logo=tailwindcss&logoColor=white" />
  <img src="https://img.shields.io/badge/PostgreSQL-16-blue?style=flat&logo=postgresql&logoColor=white" />
  <img src="https://img.shields.io/badge/PHP-%5E8.2-777bb4?style=flat&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/Node-%5E20-43853d?style=flat&logo=node.js&logoColor=white" />
  <img src="https://img.shields.io/badge/Build-Vite-646CFF?style=flat&logo=vite&logoColor=white" />
</p>

---

## 🧭 Índice
- [Visión General](#-visión-general)
- [Características](#-características)
- [Arquitectura](#-arquitectura)
- [Stack Técnico](#-stack-técnico)
- [Capturas / Demo](#-capturas--demo)
- [Comenzar](#-comenzar)
  - [Requisitos](#requisitos)
  - [Instalación](#instalación)
  - [Variables de Entorno](#variables-de-entorno)
  - [Migraciones y Seeders](#migraciones-y-seeders)
  - [Compilar Assets](#compilar-assets)
- [Estructura del Proyecto](#-estructura-del-proyecto)
- [Scripts Útiles](#-scripts-útiles)
- [Roadmap](#-roadmap)
- [Convenciones](#-convenciones)
- [Contribuir](#-contribuir)
- [Licencia](#-licencia)
- [Autor](#-autor)

---

## 🧩 Visión General
Proyecto de **comercio electrónico** diseñado para alto rendimiento, seguridad y escalabilidad, alineado con la operación de una empresa **líder en Paraguay**.  
El objetivo es ofrecer una experiencia de compra **ágil, responsive y confiable**, integrando un **panel administrativo** flexible y preparado para integraciones futuras (pasarelas de pago, logística, marketing, etc.).

> ⚠️ **Estado:** En desarrollo activo (**WIP**). Funcionalidades pueden cambiar.

---

## ✨ Características
- 🛒 **Catálogo** con categorías, búsqueda y filtros.
- 🧺 **Carrito de compras** persistente.
- 💳 **Checkout** (pasarela de pagos a integrar).
- 👤 **Autenticación** y perfiles de usuario.
- 🔐 **Roles & Permisos** para administración.
- 📦 **Gestión de productos** (CRUD).
- 📈 **Base PostgreSQL** optimizada para consultas.
- 🎨 **UI** moderna con Tailwind, mobile-first.

---

## 🏗️ Arquitectura
```txt
┌──────────────────────────┐
│        Cliente (Web)     │  →  Tailwind CSS, Blade/Vue (opcional)
└─────────────┬────────────┘
              │ HTTP/JSON
┌─────────────▼────────────┐
│        Laravel API       │  →  Controladores, Servicios, Repositorios, Policies
├─────────────┬────────────┤
│  Validación │ Middleware │
└───────┬─────┴───────┬────┘
        │             │
┌───────▼───────┐  ┌──▼────────────────┐
│   PostgreSQL   │  │  Integraciones*  │  → Pagos, Mensajería, Envíos
└───────────────┘  └───────────────────┘
(* próximamente)
