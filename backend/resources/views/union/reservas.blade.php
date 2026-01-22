@extends('layouts.union')

@section('title', 'Reservas · Union Sports & Culture')

@section('content')

  <section class="uc-section uc-section-alt">
    <div class="uc-container" style="max-width: 900px;">
      <p class="uc-kicker">Reservas</p>
      <h2>Reservas por telefone ou e-mail</h2>

      <p class="uc-section-intro" style="margin-top: 10px;">
        Nesta fase inicial, para garantirmos a melhor experiência e uma operação simples,
        as reservas são feitas apenas por <strong>telefone</strong> ou <strong>e-mail</strong>.
      </p>

      <div style="display:grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; margin-top: 22px;">
        @if(config('union.phone'))
          <a
            class="uc-card"
            href="tel:{{ preg_replace('/\s+/', '', config('union.phone')) }}"
            style="text-decoration:none; padding:18px;"
          >
            <h3 style="margin:0 0 6px 0;">Ligar agora</h3>
            <p style="margin:0; opacity:.85;">{{ config('union.phone') }}</p>
            <p style="margin:10px 0 0 0; font-size: 14px; opacity:.7;">
              Toque para ligar diretamente.
            </p>
          </a>
        @endif

        @if(config('union.email'))
          <a
            class="uc-card"
            href="mailto:{{ config('union.email') }}?subject={{ rawurlencode('Reserva - Union Sports & Culture') }}"
            style="text-decoration:none; padding:18px;"
          >
            <h3 style="margin:0 0 6px 0;">Enviar e-mail</h3>
            <p style="margin:0; opacity:.85;">{{ config('union.email') }}</p>
            <p style="margin:10px 0 0 0; font-size: 14px; opacity:.7;">
              Respondes com data, hora e nº de pessoas.
            </p>
          </a>
        @endif
      </div>

      <div class="uc-menu-note" style="margin-top: 18px;">
        Dica: indica <strong>data</strong>, <strong>hora</strong> e <strong>nº de pessoas</strong>. Reservas sujeitas a disponibilidade e confirmação.
      </div>

      <div style="margin-top: 26px;">
        <h3 style="margin-bottom: 8px;">Localização</h3>
        <p style="margin:0; opacity:.85;">Fernão Ferro, Seixal</p>
      </div>

      <div style="margin-top: 26px;">
        <a class="uc-btn-ghost" href="{{ route('union.home') }}#contactos">Ver contactos no footer</a>
      </div>
    </div>
  </section>

  <style>
    /* Mobile: 2 colunas -> 1 coluna */
    @media (max-width: 720px) {
      .uc-section .uc-container > div[style*="grid-template-columns"] {
        grid-template-columns: 1fr !important;
      }
    }
  </style>

@endsection
