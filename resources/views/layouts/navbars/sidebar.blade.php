<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo" @if ($pageSlug == 'products' ?? '')class="active " @endif>
            <a href="#" class="simple-text logo-mini"><img src="https://comoequetala.com.br/images/com_vagasejobs/empresa/marca/19-7ca539eaadb583ed8adbfa8ffcc8e48e.png"></a>
            <a href="products" class="simple-text logo-normal">{{ _('ignição') }}</a>
        </div>

        <ul class="nav">

            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Area do Cliente') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile'  ?? '') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ _('Meu Perfil') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'products/cadastro' ?? '') class="active " @endif>
                            <a href="{{ route('products.cadastro')  }}">
                                <i class="fas fa-cart-plus"></i>
                                <p>{{ _('Cadastrar Novo') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug == 'products' ?? '') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="far fa-envelope"></i>
                    <p>{{ _('E-mail') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'messege' ?? '') class="active " @endif>
                <a href="{{ route('messegens.index') }}">
                    <i class="far fa-comment-alt"></i>
                    <p>{{ _('Conversa') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'dashboard' ?? '') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="far fa-check-square"></i>
                    <p>{{ _('Todo') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'dashboard' ?? '') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="far fa-calendar"></i>
                    <p>{{ _('Calendário') }}</p>
                </a>
            </li>





        </ul>
    </div>
</div>
