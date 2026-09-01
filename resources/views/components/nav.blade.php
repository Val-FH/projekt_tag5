<nav>
    <a href="/" class="{{ request()->is('/') ? 'active' : '' }}"> Willkommen </a>
    <a href="/kurse" class="{{ request()->is('kurse') ? 'active' : '' }}">Kurse</a>
    <a href="/interessen" class="{{ request()->is('interessen') ? 'active' : '' }}">Interessen</a>
    <a href="/anmeldung" class="{{ request()->is('anmeldung') ? 'active' : '' }}">Anmeldung</a>
    <a href="/anmeldungen" class="{{ request()->is('anmeldungen') ? 'active' : '' }}">Anmeldungen</a>
    <a href="/kontakt" class="{{ request()->is('kontakt') ? 'active' : '' }}">Kontakt</a>
    <a href="/impressum" class="{{ request()->is('impressum') ? 'active' : '' }}">Impressum</a>
</nav>    