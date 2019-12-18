<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/index.html.twig */
class __TwigTemplate_7e9d91e69192722ce160b965684cbddea79b3b1df625aef63755e3594e1edbf1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main_content' => [$this, 'block_main_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_content"));

        echo "  
    <div class=\"flex\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"-50 -50 600 600\" id=\"menu\">
            <g id=\"symbolsContainer\">
                <symbol class=\"icon icon-\" id=\"icon-1\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"home\" class=\"svg-inline--fa fa-home fa-w-18\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\"><path fill=\"currentColor\" d=\"M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"icon-2\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"heartbeat\" class=\"svg-inline--fa fa-heartbeat fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M320.2 243.8l-49.7 99.4c-6 12.1-23.4 11.7-28.9-.6l-56.9-126.3-30 71.7H60.6l182.5 186.5c7.1 7.3 18.6 7.3 25.7 0L451.4 288H342.3l-22.1-44.2zM473.7 73.9l-2.4-2.5c-51.5-52.6-135.8-52.6-187.4 0L256 100l-27.9-28.5c-51.5-52.7-135.9-52.7-187.4 0l-2.4 2.4C-10.4 123.7-12.5 203 31 256h102.4l35.9-86.2c5.4-12.9 23.6-13.2 29.4-.4l58.2 129.3 49-97.9c5.9-11.8 22.7-11.8 28.6 0l27.6 55.2H481c43.5-53 41.4-132.3-7.3-182.1z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"icon-3\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"piggy-bank\" class=\"svg-inline--fa fa-piggy-bank fa-w-18\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\"><path fill=\"currentColor\" d=\"M560 224h-29.5c-8.8-20-21.6-37.7-37.4-52.5L512 96h-32c-29.4 0-55.4 13.5-73 34.3-7.6-1.1-15.1-2.3-23-2.3H256c-77.4 0-141.9 55-156.8 128H56c-14.8 0-26.5-13.5-23.5-28.8C34.7 215.8 45.4 208 57 208h1c3.3 0 6-2.7 6-6v-20c0-3.3-2.7-6-6-6-28.5 0-53.9 20.4-57.5 48.6C-3.9 258.8 22.7 288 56 288h40c0 52.2 25.4 98.1 64 127.3V496c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16v-48h128v48c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16v-80.7c11.8-8.9 22.3-19.4 31.3-31.3H560c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16zm-128 64c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM256 96h128c5.4 0 10.7.4 15.9.8 0-.3.1-.5.1-.8 0-53-43-96-96-96s-96 43-96 96c0 2.1.5 4.1.6 6.2 15.2-3.9 31-6.2 47.4-6.2z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"icon-4\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"bicycle\" class=\"svg-inline--fa fa-bicycle fa-w-20\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><path fill=\"currentColor\" d=\"M512.509 192.001c-16.373-.064-32.03 2.955-46.436 8.495l-77.68-125.153A24 24 0 0 0 368.001 64h-64c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h50.649l14.896 24H256.002v-16c0-8.837-7.163-16-16-16h-87.459c-13.441 0-24.777 10.999-24.536 24.437.232 13.044 10.876 23.563 23.995 23.563h48.726l-29.417 47.52c-13.433-4.83-27.904-7.483-42.992-7.52C58.094 191.83.412 249.012.002 319.236-.413 390.279 57.055 448 128.002 448c59.642 0 109.758-40.793 123.967-96h52.033a24 24 0 0 0 20.406-11.367L410.37 201.77l14.938 24.067c-25.455 23.448-41.385 57.081-41.307 94.437.145 68.833 57.899 127.051 126.729 127.719 70.606.685 128.181-55.803 129.255-125.996 1.086-70.941-56.526-129.72-127.476-129.996zM186.75 265.772c9.727 10.529 16.673 23.661 19.642 38.228h-43.306l23.664-38.228zM128.002 400c-44.112 0-80-35.888-80-80s35.888-80 80-80c5.869 0 11.586.653 17.099 1.859l-45.505 73.509C89.715 331.327 101.213 352 120.002 352h81.3c-12.37 28.225-40.562 48-73.3 48zm162.63-96h-35.624c-3.96-31.756-19.556-59.894-42.383-80.026L237.371 184h127.547l-74.286 120zm217.057 95.886c-41.036-2.165-74.049-35.692-75.627-76.755-.812-21.121 6.633-40.518 19.335-55.263l44.433 71.586c4.66 7.508 14.524 9.816 22.032 5.156l13.594-8.437c7.508-4.66 9.817-14.524 5.156-22.032l-44.468-71.643a79.901 79.901 0 0 1 19.858-2.497c44.112 0 80 35.888 80 80-.001 45.54-38.252 82.316-84.313 79.885z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"icon-5\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"calendar-week\" class=\"svg-inline--fa fa-calendar-week fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z\"></path></svg>
                </symbol>
                
            </g>

            <g id=\"itemsContainer\">\t\t
                <a class=\"item\" id=\"item-1\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS1:target=\"_parent\" transform=\"matrix(1,0,0,1,0,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 327.25424859373686,12.235870926211618 z\"></path><use xlink:href=\"#icon-1\" width=\"40\" height=\"40\" x=\"367.53289794921875\" y=\"130.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\"></use><text x=\"330.53289794921875\" y=\"110.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\" >LOGEMENT</text></a>
                <a class=\"item\" id=\"item-2\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS2:target=\"_parent\" transform=\"matrix(0.30901,-0.95105,0.95105,0.30901,-65.01837766752521,410.5098804800515)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 327.25424859373686,12.235870926211618 z\"></path><use xlink:href=\"#icon-2\" width=\"40\" height=\"40\" x=\"367.53289794921875\" y=\"130.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\"></use><text x=\"352.53289794921875\" y=\"110.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\" >SANTÉ</text></a>
                <a class=\"item\" id=\"item-3\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS3:target=\"_parent\" transform=\"matrix(-0.80901,-0.58778,0.58778,-0.80901,305.3079355206185,599.2005616668552)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 327.25424859373686,12.235870926211618 z\"></path><use xlink:href=\"#icon-3\" width=\"40\" height=\"40\" x=\"367.53289794921875\" y=\"130.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\"></use><text x=\"345.53289794921875\" y=\"110.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\" >FINANCE</text></a>
                <a class=\"item\" id=\"item-4\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS4:target=\"_parent\" transform=\"matrix(-0.80901,0.58778,-0.58778,-0.80901,599.2005616668552,305.30793552061857)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 327.25424859373686,12.235870926211618 z\"></path><use xlink:href=\"#icon-4\" width=\"40\" height=\"40\" x=\"367.53289794921875\" y=\"130.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\"></use><text x=\"326.3289794921875\" y=\"110.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\" >TRANSPORT</text></a>
                <a class=\"item\" id=\"item-5\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS5:target=\"_parent\" transform=\"matrix(0.30901,0.95105,-0.95105,0.30901,410.5098804800516,-65.01837766752521)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 327.25424859373686,12.235870926211618 z\"></path><use xlink:href=\"#icon-5\" width=\"40\" height=\"40\" x=\"367.53289794921875\" y=\"130.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\"></use><text x=\"343.53289794921875\" y=\"110.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\" >AUTRES</text></a>
            </g>

            <g id=\"trigger\" class=\"trigger menu-trigger\">
                <circle cx=\"250\" cy=\"250\" r=\"30\"></circle>
            </g>
        </svg>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js\"></script>
    </div>

    <div class=\"sante overlay-camembert\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"-50 -50 600 600\" id=\"menu-sante\">
            <g id=\"symbolsContainer-sante\">
                <symbol class=\"icon icon-\" id=\"sante-1\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"user-md\" class=\"svg-inline--fa fa-user-md fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zM104 424c0 13.3 10.7 24 24 24s24-10.7 24-24-10.7-24-24-24-24 10.7-24 24zm216-135.4v49c36.5 7.4 64 39.8 64 78.4v41.7c0 7.6-5.4 14.2-12.9 15.7l-32.2 6.4c-4.3.9-8.5-1.9-9.4-6.3l-3.1-15.7c-.9-4.3 1.9-8.6 6.3-9.4l19.3-3.9V416c0-62.8-96-65.1-96 1.9v26.7l19.3 3.9c4.3.9 7.1 5.1 6.3 9.4l-3.1 15.7c-.9 4.3-5.1 7.1-9.4 6.3l-31.2-4.2c-7.9-1.1-13.8-7.8-13.8-15.9V416c0-38.6 27.5-70.9 64-78.4v-45.2c-2.2.7-4.4 1.1-6.6 1.9-18 6.3-37.3 9.8-57.4 9.8s-39.4-3.5-57.4-9.8c-7.4-2.6-14.9-4.2-22.6-5.2v81.6c23.1 6.9 40 28.1 40 53.4 0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.3 16.9-46.5 40-53.4v-80.4C48.5 301 0 355.8 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-72-56.8-130.3-128-133.8z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"sante-2\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"wheelchair\" class=\"svg-inline--fa fa-wheelchair fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M496.101 385.669l14.227 28.663c3.929 7.915.697 17.516-7.218 21.445l-65.465 32.886c-16.049 7.967-35.556 1.194-43.189-15.055L331.679 320H192c-15.925 0-29.426-11.71-31.679-27.475C126.433 55.308 128.38 70.044 128 64c0-36.358 30.318-65.635 67.052-63.929 33.271 1.545 60.048 28.905 60.925 62.201.868 32.933-23.152 60.423-54.608 65.039l4.67 32.69H336c8.837 0 16 7.163 16 16v32c0 8.837-7.163 16-16 16H215.182l4.572 32H352a32 32 0 0 1 28.962 18.392L438.477 396.8l36.178-18.349c7.915-3.929 17.517-.697 21.446 7.218zM311.358 352h-24.506c-7.788 54.204-54.528 96-110.852 96-61.757 0-112-50.243-112-112 0-41.505 22.694-77.809 56.324-97.156-3.712-25.965-6.844-47.86-9.488-66.333C45.956 198.464 0 261.963 0 336c0 97.047 78.953 176 176 176 71.87 0 133.806-43.308 161.11-105.192L311.358 352z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"sante-3\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"venus-mars\" class=\"svg-inline--fa fa-venus-mars fa-w-18\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\"><path fill=\"currentColor\" d=\"M564 0h-79c-10.7 0-16 12.9-8.5 20.5l16.9 16.9-48.7 48.7C422.5 72.1 396.2 64 368 64c-33.7 0-64.6 11.6-89.2 30.9 14 16.7 25 36 32.1 57.1 14.5-14.8 34.7-24 57.1-24 44.1 0 80 35.9 80 80s-35.9 80-80 80c-22.3 0-42.6-9.2-57.1-24-7.1 21.1-18 40.4-32.1 57.1 24.5 19.4 55.5 30.9 89.2 30.9 79.5 0 144-64.5 144-144 0-28.2-8.1-54.5-22.1-76.7l48.7-48.7 16.9 16.9c2.4 2.4 5.4 3.5 8.4 3.5 6.2 0 12.1-4.8 12.1-12V12c0-6.6-5.4-12-12-12zM144 64C64.5 64 0 128.5 0 208c0 68.5 47.9 125.9 112 140.4V400H76c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h36v36c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-36h36c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-36v-51.6c64.1-14.6 112-71.9 112-140.4 0-79.5-64.5-144-144-144zm0 224c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"sante-4\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"phone-volume\" class=\"svg-inline--fa fa-phone-volume fa-w-12\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 384 512\"><path fill=\"currentColor\" d=\"M97.333 506.966c-129.874-129.874-129.681-340.252 0-469.933 5.698-5.698 14.527-6.632 21.263-2.422l64.817 40.513a17.187 17.187 0 0 1 6.849 20.958l-32.408 81.021a17.188 17.188 0 0 1-17.669 10.719l-55.81-5.58c-21.051 58.261-20.612 122.471 0 179.515l55.811-5.581a17.188 17.188 0 0 1 17.669 10.719l32.408 81.022a17.188 17.188 0 0 1-6.849 20.958l-64.817 40.513a17.19 17.19 0 0 1-21.264-2.422zM247.126 95.473c11.832 20.047 11.832 45.008 0 65.055-3.95 6.693-13.108 7.959-18.718 2.581l-5.975-5.726c-3.911-3.748-4.793-9.622-2.261-14.41a32.063 32.063 0 0 0 0-29.945c-2.533-4.788-1.65-10.662 2.261-14.41l5.975-5.726c5.61-5.378 14.768-4.112 18.718 2.581zm91.787-91.187c60.14 71.604 60.092 175.882 0 247.428-4.474 5.327-12.53 5.746-17.552.933l-5.798-5.557c-4.56-4.371-4.977-11.529-.93-16.379 49.687-59.538 49.646-145.933 0-205.422-4.047-4.85-3.631-12.008.93-16.379l5.798-5.557c5.022-4.813 13.078-4.394 17.552.933zm-45.972 44.941c36.05 46.322 36.108 111.149 0 157.546-4.39 5.641-12.697 6.251-17.856 1.304l-5.818-5.579c-4.4-4.219-4.998-11.095-1.285-15.931 26.536-34.564 26.534-82.572 0-117.134-3.713-4.836-3.115-11.711 1.285-15.931l5.818-5.579c5.159-4.947 13.466-4.337 17.856 1.304z\"></path></svg>
                </symbol>
            </g>

            <g id=\"itemsContainer-sante\">\t\t
            <a class=\"item\" id=\"item-1-sante\" xlink:href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "medecin"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS1:target=\"_parent\" transform=\"matrix(1,0,0,1,0,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#sante-1\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"320.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >MÉDECIN</text></a>
            <a class=\"item\" id=\"item-2-sante\" xlink:href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "handicap"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS2:target=\"_parent\" transform=\"matrix(0,-1,1,0,0,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#sante-2\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"310.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >HANDICAP</text></a>
            <a class=\"item\" id=\"item-3-sante\" xlink:href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "sexualite"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS3:target=\"_parent\" transform=\"matrix(-1,0,0,-1,500,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#sante-3\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"310.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >SEXUALITÉ</text></a>
            <a class=\"item\" id=\"item-4-sante\" xlink:href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "besoin_aide"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS4:target=\"_parent\" transform=\"matrix(0,1,-1,0,500.00000000000006,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#sante-4\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"295.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >BESOIN D'AIDE</text></a>

            <g id=\"trigger-sante\" class=\"trigger menu-trigger\">
                <circle cx=\"250\" cy=\"250\" r=\"30\"></circle>
            </g>
        </svg>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js\"></script>
    </div>

    <div class=\"finance overlay-camembert\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"-50 -50 600 600\" id=\"menu-finance\">
            <g id=\"symbolsContainer-finance\">
                <symbol class=\"icon icon-\" id=\"finance-1\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"copy\" class=\"svg-inline--fa fa-copy fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M320 448v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V120c0-13.255 10.745-24 24-24h72v296c0 30.879 25.121 56 56 56h168zm0-344V0H152c-13.255 0-24 10.745-24 24v368c0 13.255 10.745 24 24 24h272c13.255 0 24-10.745 24-24V128H344c-13.2 0-24-10.8-24-24zm120.971-31.029L375.029 7.029A24 24 0 0 0 358.059 0H352v96h96v-6.059a24 24 0 0 0-7.029-16.97z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"finance-2\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" data-icon=\"cuttlefish\" class=\"svg-inline--fa fa-cuttlefish fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 440 512\"><path fill=\"currentColor\" d=\"M344 305.5c-17.5 31.6-57.4 54.5-96 54.5-56.6 0-104-47.4-104-104s47.4-104 104-104c38.6 0 78.5 22.9 96 54.5 13.7-50.9 41.7-93.3 87-117.8C385.7 39.1 320.5 8 248 8 111 8 0 119 0 256s111 248 248 248c72.5 0 137.7-31.1 183-80.7-45.3-24.5-73.3-66.9-87-117.8z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"finance-3\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"suitcase\" class=\"svg-inline--fa fa-suitcase fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M128 480h256V80c0-26.5-21.5-48-48-48H176c-26.5 0-48 21.5-48 48v400zm64-384h128v32H192V96zm320 80v256c0 26.5-21.5 48-48 48h-48V128h48c26.5 0 48 21.5 48 48zM96 480H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48h48v352z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"finance-4\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"money-check-alt\" class=\"svg-inline--fa fa-money-check-alt fa-w-20\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><path fill=\"currentColor\" d=\"M608 32H32C14.33 32 0 46.33 0 64v384c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zM176 327.88V344c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-16.29c-11.29-.58-22.27-4.52-31.37-11.35-3.9-2.93-4.1-8.77-.57-12.14l11.75-11.21c2.77-2.64 6.89-2.76 10.13-.73 3.87 2.42 8.26 3.72 12.82 3.72h28.11c6.5 0 11.8-5.92 11.8-13.19 0-5.95-3.61-11.19-8.77-12.73l-45-13.5c-18.59-5.58-31.58-23.42-31.58-43.39 0-24.52 19.05-44.44 42.67-45.07V152c0-4.42 3.58-8 8-8h16c4.42 0 8 3.58 8 8v16.29c11.29.58 22.27 4.51 31.37 11.35 3.9 2.93 4.1 8.77.57 12.14l-11.75 11.21c-2.77 2.64-6.89 2.76-10.13.73-3.87-2.43-8.26-3.72-12.82-3.72h-28.11c-6.5 0-11.8 5.92-11.8 13.19 0 5.95 3.61 11.19 8.77 12.73l45 13.5c18.59 5.58 31.58 23.42 31.58 43.39 0 24.53-19.05 44.44-42.67 45.07zM416 312c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h112c4.42 0 8 3.58 8 8v16zm160 0c0 4.42-3.58 8-8 8h-80c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16zm0-96c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h272c4.42 0 8 3.58 8 8v16z\"></path></svg>
                </symbol>
            </g>

            <g id=\"itemsContainer-finance\">\t\t
            <a class=\"item\" id=\"item-1-finance\" xlink:href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "apl"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS1:target=\"_parent\" transform=\"matrix(1,0,0,1,0,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#finance-1\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"350.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >APL</text></a>
            <a class=\"item\" id=\"item-2-finance\" xlink:href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "crous"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS2:target=\"_parent\" transform=\"matrix(0,-1,1,0,0,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#finance-2\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"330.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >CROUS</text></a>
            <a class=\"item\" id=\"item-3-finance\" xlink:href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "job"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS3:target=\"_parent\" transform=\"matrix(-1,0,0,-1,500,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#finance-3\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"340.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >JOBS</text></a>
            <a class=\"item\" id=\"item-4-finance\" xlink:href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "impots"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS4:target=\"_parent\" transform=\"matrix(0,1,-1,0,500.00000000000006,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#finance-4\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"335.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >IMPÔT</text></a>

            <g id=\"trigger-finance\" class=\"trigger menu-trigger\">
                <circle cx=\"250\" cy=\"250\" r=\"30\"></circle>
            </g>
        </svg>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js\"></script>
    </div>

    <div class=\"logement overlay-camembert\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"-50 -50 600 600\" id=\"menu-logement\">
            <g id=\"symbolsContainer-logement\">
                <symbol class=\"icon icon-\" id=\"logement-1\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"hands-helping\" class=\"svg-inline--fa fa-hands-helping fa-w-20\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><path fill=\"currentColor\" d=\"M488 192H336v56c0 39.7-32.3 72-72 72s-72-32.3-72-72V126.4l-64.9 39C107.8 176.9 96 197.8 96 220.2v47.3l-80 46.2C.7 322.5-4.6 342.1 4.3 357.4l80 138.6c8.8 15.3 28.4 20.5 43.7 11.7L231.4 448H368c35.3 0 64-28.7 64-64h16c17.7 0 32-14.3 32-32v-64h8c13.3 0 24-10.7 24-24v-48c0-13.3-10.7-24-24-24zm147.7-37.4L555.7 16C546.9.7 527.3-4.5 512 4.3L408.6 64H306.4c-12 0-23.7 3.4-33.9 9.7L239 94.6c-9.4 5.8-15 16.1-15 27.1V248c0 22.1 17.9 40 40 40s40-17.9 40-40v-88h184c30.9 0 56 25.1 56 56v28.5l80-46.2c15.3-8.9 20.5-28.4 11.7-43.7z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"logement-2\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" data-icon=\"cuttlefish\" class=\"svg-inline--fa fa-cuttlefish fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 440 512\"><path fill=\"currentColor\" d=\"M344 305.5c-17.5 31.6-57.4 54.5-96 54.5-56.6 0-104-47.4-104-104s47.4-104 104-104c38.6 0 78.5 22.9 96 54.5 13.7-50.9 41.7-93.3 87-117.8C385.7 39.1 320.5 8 248 8 111 8 0 119 0 256s111 248 248 248c72.5 0 137.7-31.1 183-80.7-45.3-24.5-73.3-66.9-87-117.8z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"logement-3\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"campground\" class=\"svg-inline--fa fa-campground fa-w-20\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><path fill=\"currentColor\" d=\"M624 448h-24.68L359.54 117.75l53.41-73.55c5.19-7.15 3.61-17.16-3.54-22.35l-25.9-18.79c-7.15-5.19-17.15-3.61-22.35 3.55L320 63.3 278.83 6.6c-5.19-7.15-15.2-8.74-22.35-3.55l-25.88 18.8c-7.15 5.19-8.74 15.2-3.54 22.35l53.41 73.55L40.68 448H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h608c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM320 288l116.36 160H203.64L320 288z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"logement-4\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"building\" class=\"svg-inline--fa fa-building fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M436 480h-20V24c0-13.255-10.745-24-24-24H56C42.745 0 32 10.745 32 24v456H12c-6.627 0-12 5.373-12 12v20h448v-20c0-6.627-5.373-12-12-12zM128 76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76zm0 96c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40zm52 148h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12zm76 160h-64v-84c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v84zm64-172c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40z\"></path></svg>
                </symbol>
            </g>

            <g id=\"itemsContainer-logement\">\t\t
            <a class=\"item\" id=\"item-1-logement\" xlink:href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "aide_log"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS1:target=\"_parent\" transform=\"matrix(1,0,0,1,0,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#logement-1\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"335.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >AIDES</text></a>
            <a class=\"item\" id=\"item-2-logement\" xlink:href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "crous"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS2:target=\"_parent\" transform=\"matrix(0,-1,1,0,0,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#logement-2\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"330.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >CROUS</text></a>
            <a class=\"item\" id=\"item-3-logement\" xlink:href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "urgence_log"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS3:target=\"_parent\" transform=\"matrix(-1,0,0,-1,500,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#logement-3\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"320.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >URGENCE</text></a>
            <a class=\"item\" id=\"item-4-logement\" xlink:href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "rechercher_log"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS4:target=\"_parent\" transform=\"matrix(0,1,-1,0,500.00000000000006,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#logement-4\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"300.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >RECHERCHER</text></a>

            <g id=\"trigger-logement\" class=\"trigger menu-trigger\">
                <circle cx=\"250\" cy=\"250\" r=\"30\"></circle>
            </g>
        </svg>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js\"></script>
    </div>

    <div class=\"transport overlay-camembert\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"-50 -50 600 600\" id=\"menu-transport\">
            <g id=\"symbolsContainer-transport\">
                <symbol class=\"icon icon-\" id=\"transport-1\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"bicycle\" class=\"svg-inline--fa fa-bicycle fa-w-20\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><path fill=\"currentColor\" d=\"M512.509 192.001c-16.373-.064-32.03 2.955-46.436 8.495l-77.68-125.153A24 24 0 0 0 368.001 64h-64c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h50.649l14.896 24H256.002v-16c0-8.837-7.163-16-16-16h-87.459c-13.441 0-24.777 10.999-24.536 24.437.232 13.044 10.876 23.563 23.995 23.563h48.726l-29.417 47.52c-13.433-4.83-27.904-7.483-42.992-7.52C58.094 191.83.412 249.012.002 319.236-.413 390.279 57.055 448 128.002 448c59.642 0 109.758-40.793 123.967-96h52.033a24 24 0 0 0 20.406-11.367L410.37 201.77l14.938 24.067c-25.455 23.448-41.385 57.081-41.307 94.437.145 68.833 57.899 127.051 126.729 127.719 70.606.685 128.181-55.803 129.255-125.996 1.086-70.941-56.526-129.72-127.476-129.996zM186.75 265.772c9.727 10.529 16.673 23.661 19.642 38.228h-43.306l23.664-38.228zM128.002 400c-44.112 0-80-35.888-80-80s35.888-80 80-80c5.869 0 11.586.653 17.099 1.859l-45.505 73.509C89.715 331.327 101.213 352 120.002 352h81.3c-12.37 28.225-40.562 48-73.3 48zm162.63-96h-35.624c-3.96-31.756-19.556-59.894-42.383-80.026L237.371 184h127.547l-74.286 120zm217.057 95.886c-41.036-2.165-74.049-35.692-75.627-76.755-.812-21.121 6.633-40.518 19.335-55.263l44.433 71.586c4.66 7.508 14.524 9.816 22.032 5.156l13.594-8.437c7.508-4.66 9.817-14.524 5.156-22.032l-44.468-71.643a79.901 79.901 0 0 1 19.858-2.497c44.112 0 80 35.888 80 80-.001 45.54-38.252 82.316-84.313 79.885z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"transport-2\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"bus\" class=\"svg-inline--fa fa-bus fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M488 128h-8V80c0-44.8-99.2-80-224-80S32 35.2 32 80v48h-8c-13.25 0-24 10.74-24 24v80c0 13.25 10.75 24 24 24h8v160c0 17.67 14.33 32 32 32v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h192v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h6.4c16 0 25.6-12.8 25.6-25.6V256h8c13.25 0 24-10.75 24-24v-80c0-13.26-10.75-24-24-24zM112 400c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm16-112c-17.67 0-32-14.33-32-32V128c0-17.67 14.33-32 32-32h256c17.67 0 32 14.33 32 32v128c0 17.67-14.33 32-32 32H128zm272 112c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"transport-3\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"train\" class=\"svg-inline--fa fa-train fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M448 96v256c0 51.815-61.624 96-130.022 96l62.98 49.721C386.905 502.417 383.562 512 376 512H72c-7.578 0-10.892-9.594-4.957-14.279L130.022 448C61.82 448 0 403.954 0 352V96C0 42.981 64 0 128 0h192c65 0 128 42.981 128 96zm-48 136V120c0-13.255-10.745-24-24-24H72c-13.255 0-24 10.745-24 24v112c0 13.255 10.745 24 24 24h304c13.255 0 24-10.745 24-24zm-176 64c-30.928 0-56 25.072-56 56s25.072 56 56 56 56-25.072 56-56-25.072-56-56-56z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"transport-4\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"address-card\" class=\"svg-inline--fa fa-address-card fa-w-18\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\"><path fill=\"currentColor\" d=\"M528 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-352 96c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H86.4C74 384 64 375.4 64 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2zM512 312c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-64c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-64c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z\"></path></svg>
                </symbol>
            </g>

            <g id=\"itemsContainer-transport\">\t\t
            <a class=\"item\" id=\"item-1-transport\" xlink:href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "velos"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS1:target=\"_parent\" transform=\"matrix(1,0,0,1,0,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#transport-1\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"335.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >VÉLOS</text></a>
            <a class=\"item\" id=\"item-2-transport\" xlink:href=\"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "bus"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS2:target=\"_parent\" transform=\"matrix(0,-1,1,0,0,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#transport-2\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"350.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >BUS</text></a>
            <a class=\"item\" id=\"item-3-transport\" xlink:href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "trains"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS3:target=\"_parent\" transform=\"matrix(-1,0,0,-1,500,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#transport-3\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"330.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >TRAINS</text></a>
            <a class=\"item\" id=\"item-4-transport\" xlink:href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "abonnement"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS4:target=\"_parent\" transform=\"matrix(0,1,-1,0,500.00000000000006,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#transport-4\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"290.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >ABONNEMENT</text></a>

            <g id=\"trigger-transport\" class=\"trigger menu-trigger\">
                <circle cx=\"250\" cy=\"250\" r=\"30\"></circle>
            </g>
        </svg>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js\"></script>
    </div>

    <div class=\"comodite overlay-camembert\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"-50 -50 600 600\" id=\"menu-comodite\">
            <g id=\"symbolsContainer-comodite\">
                <symbol class=\"icon icon-\" id=\"comodite-1\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"coins\" class=\"svg-inline--fa fa-coins fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M0 405.3V448c0 35.3 86 64 192 64s192-28.7 192-64v-42.7C342.7 434.4 267.2 448 192 448S41.3 434.4 0 405.3zM320 128c106 0 192-28.7 192-64S426 0 320 0 128 28.7 128 64s86 64 192 64zM0 300.4V352c0 35.3 86 64 192 64s192-28.7 192-64v-51.6c-41.3 34-116.9 51.6-192 51.6S41.3 334.4 0 300.4zm416 11c57.3-11.1 96-31.7 96-55.4v-42.7c-23.2 16.4-57.3 27.6-96 34.5v63.6zM192 160C86 160 0 195.8 0 240s86 80 192 80 192-35.8 192-80-86-80-192-80zm219.3 56.3c60-10.8 100.7-32 100.7-56.3v-42.7c-35.5 25.1-96.5 38.6-160.7 41.8 29.5 14.3 51.2 33.5 60 57.2z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"comodite-2\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"calendar-week\" class=\"svg-inline--fa fa-calendar-week fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"comodite-3\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"glass-cheers\" class=\"svg-inline--fa fa-glass-cheers fa-w-20\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><path fill=\"currentColor\" d=\"M639.4 433.6c-8.4-20.4-31.8-30.1-52.2-21.6l-22.1 9.2-38.7-101.9c47.9-35 64.8-100.3 34.5-152.8L474.3 16c-8-13.9-25.1-19.7-40-13.6L320 49.8 205.7 2.4c-14.9-6.2-32-.3-40 13.6L79.1 166.5C48.9 219 65.7 284.3 113.6 319.2L74.9 421.1l-22.1-9.2c-20.4-8.5-43.7 1.2-52.2 21.6-1.7 4.1.2 8.8 4.3 10.5l162.3 67.4c4.1 1.7 8.7-.2 10.4-4.3 8.4-20.4-1.2-43.8-21.6-52.3l-22.1-9.2L173.3 342c4.4.5 8.8 1.3 13.1 1.3 51.7 0 99.4-33.1 113.4-85.3l20.2-75.4 20.2 75.4c14 52.2 61.7 85.3 113.4 85.3 4.3 0 8.7-.8 13.1-1.3L506 445.6l-22.1 9.2c-20.4 8.5-30.1 31.9-21.6 52.3 1.7 4.1 6.4 6 10.4 4.3L635.1 444c4-1.7 6-6.3 4.3-10.4zM275.9 162.1l-112.1-46.5 36.5-63.4 94.5 39.2-18.9 70.7zm88.2 0l-18.9-70.7 94.5-39.2 36.5 63.4-112.1 46.5z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"comodite-4\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"handshake\" class=\"svg-inline--fa fa-handshake fa-w-20\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><path fill=\"currentColor\" d=\"M434.7 64h-85.9c-8 0-15.7 3-21.6 8.4l-98.3 90c-.1.1-.2.3-.3.4-16.6 15.6-16.3 40.5-2.1 56 12.7 13.9 39.4 17.6 56.1 2.7.1-.1.3-.1.4-.2l79.9-73.2c6.5-5.9 16.7-5.5 22.6 1 6 6.5 5.5 16.6-1 22.6l-26.1 23.9L504 313.8c2.9 2.4 5.5 5 7.9 7.7V128l-54.6-54.6c-5.9-6-14.1-9.4-22.6-9.4zM544 128.2v223.9c0 17.7 14.3 32 32 32h64V128.2h-96zm48 223.9c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM0 384h64c17.7 0 32-14.3 32-32V128.2H0V384zm48-63.9c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16c0-8.9 7.2-16 16-16zm435.9 18.6L334.6 217.5l-30 27.5c-29.7 27.1-75.2 24.5-101.7-4.4-26.9-29.4-24.8-74.9 4.4-101.7L289.1 64h-83.8c-8.5 0-16.6 3.4-22.6 9.4L128 128v223.9h18.3l90.5 81.9c27.4 22.3 67.7 18.1 90-9.3l.2-.2 17.9 15.5c15.9 13 39.4 10.5 52.3-5.4l31.4-38.6 5.4 4.4c13.7 11.1 33.9 9.1 45-4.7l9.5-11.7c11.2-13.8 9.1-33.9-4.6-45.1z\"></path></svg>
                </symbol>
            </g>

            <g id=\"itemsContainer-comodite\">\t\t
            <a class=\"item\" id=\"item-1-comodite\" xlink:href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "petit_budget"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS1:target=\"_parent\" transform=\"matrix(1,0,0,1,0,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#comodite-1\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"297.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >PETIT BUDGET</text></a>
            <a class=\"item\" id=\"item-2-comodite\" xlink:href=\"";
        // line 198
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "agenda"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS2:target=\"_parent\" transform=\"matrix(0,-1,1,0,0,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#comodite-2\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"322.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >AGENDA</text></a>
            <a class=\"item\" id=\"item-3-comodite\" xlink:href=\"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "loisirs"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS3:target=\"_parent\" transform=\"matrix(-1,0,0,-1,500,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#comodite-3\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"330.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >LOISIRS</text></a>
            <a class=\"item\" id=\"item-4-comodite\" xlink:href=\"";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "rencontres"]);
        echo "\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS4:target=\"_parent\" transform=\"matrix(0,1,-1,0,500.00000000000006,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#comodite-4\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"293.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >RENCONTRES</text></a>

            <g id=\"trigger-comodite\" class=\"trigger menu-trigger\">
                <circle cx=\"250\" cy=\"250\" r=\"30\"></circle>
            </g>
        </svg>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js\"></script>
    </div>

    <script>
    var svg = document.getElementById('menu'),
    itemsContainer = document.getElementById('itemsContainer'),
    trigger = document.getElementById('trigger'),
    label = trigger.querySelectorAll('#label')[0],
    items = Snap(itemsContainer),
    originalTransform = itemsContainer.getAttribute(\"transform\"),
    open = false;

    var svgSante = document.getElementById('menu-sante'),
    itemsContainerSante = document.getElementById('itemsContainer-sante'),
    triggerSante = document.getElementById('trigger-sante'),
    labelSante = triggerSante.querySelectorAll('#label')[0],
    itemsSante = Snap(itemsContainerSante),
    originalTransformSante = itemsContainerSante.getAttribute(\"transform\"),
    openSante = false;

    var svgFinance = document.getElementById('menu-finance'),
    itemsContainerFinance = document.getElementById('itemsContainer-finance'),
    triggerFinance = document.getElementById('trigger-finance'),
    labelFinance = triggerFinance.querySelectorAll('#label')[0],
    itemsFinance = Snap(itemsContainerFinance),
    originalTransformFinance = itemsContainerFinance.getAttribute(\"transform\"),
    openFinance = false;

    var svgLogement = document.getElementById('menu-logement'),
    itemsContainerLogement = document.getElementById('itemsContainer-logement'),
    triggerLogement = document.getElementById('trigger-logement'),
    labelLogement = triggerLogement.querySelectorAll('#label')[0],
    itemsLogement = Snap(itemsContainerLogement),
    originalTransformLogement = itemsContainerLogement.getAttribute(\"transform\"),
    openLogement = false;

    var svgTransport = document.getElementById('menu-transport'),
    itemsContainerTransport = document.getElementById('itemsContainer-transport'),
    triggerTransport = document.getElementById('trigger-transport'),
    labelTransport = triggerTransport.querySelectorAll('#label')[0],
    itemsTransport = Snap(itemsContainerTransport),
    originalTransformTransport = itemsContainerTransport.getAttribute(\"transform\"),
    openTransport = false;

    var svgComodite = document.getElementById('menu-comodite'),
    itemsContainerComodite = document.getElementById('itemsContainer-comodite'),
    triggerComodite = document.getElementById('trigger-comodite'),
    labelComodite = triggerComodite.querySelectorAll('#label')[0],
    itemsComodite = Snap(itemsContainerComodite),
    originalTransformComodite = itemsContainerComodite.getAttribute(\"transform\"),
    openComodite = false;

//close items
itemsSante.animate({
    transform: \"s0,0,250,250\",
    opacity: 0
}, .005);
svgSante.style.pointerEvents = \"none\";

itemsFinance.animate({
    transform: \"s0,0,250,250\",
    opacity: 0
}, .005);
svgFinance.style.pointerEvents = \"none\";

itemsLogement.animate({
    transform: \"s0,0,250,250\",
    opacity: 0
}, .005);
svgLogement.style.pointerEvents = \"none\";

itemsTransport.animate({
    transform: \"s0,0,250,250\",
    opacity: 0
}, .005);
svgTransport.style.pointerEvents = \"none\";

itemsComodite.animate({
    transform: \"s0,0,250,250\",
    opacity: 0
}, .005);
svgComodite.style.pointerEvents = \"none\";

//attach listener
//trigger.addEventListener('click', toggleMenu, false);


document.querySelector(\"#item-1\").addEventListener('click', toggleMenuLogement, false);
document.querySelector(\"#item-2\").addEventListener('click', toggleMenuSante, false);
document.querySelector(\"#item-3\").addEventListener('click', toggleMenuComodite, false);
document.querySelector(\"#item-4\").addEventListener('click', toggleMenuTransport, false);
document.querySelector(\"#item-5\").addEventListener('click', toggleMenuFinance, false);


//handle click
function toggleMenuSante(event) {
    if (!event) var event = window.event;
    event.stopPropagation();
    openSante = !openSante;

    if (!openSante) {
        itemsSante.animate({
            transform: \"s0,0,250,250\",
            opacity: 0
        }, 400, mina.backin);
        svgSante.style.pointerEvents = \"none\";
    } else {
        document.querySelector(\".sante\").style.zIndex = \"10\";
        itemsSante.animate({
            transform: originalTransform,
            opacity: 1
        }, 1000, mina.elastic);
        svgSante.style.pointerEvents = \"auto\";
    }
}

function toggleMenuFinance(event) {
    if (!event) var event = window.event;
    event.stopPropagation();
    openFinance = !openFinance;

    if (!openFinance) {
        itemsFinance.animate({
            transform: \"s0,0,250,250\",
            opacity: 0
        }, 400, mina.backin);
        svgFinance.style.pointerEvents = \"none\";
    } else {
        document.querySelector(\".finance\").style.zIndex = \"10\";
        itemsFinance.animate({
            transform: originalTransform,
            opacity: 1
        }, 1000, mina.elastic);
        svgFinance.style.pointerEvents = \"auto\";
    }
}

function toggleMenuLogement(event) {
    if (!event) var event = window.event;
    event.stopPropagation();
    openLogement = !openLogement;

    if (!openLogement) {
        itemsLogement.animate({
            transform: \"s0,0,250,250\",
            opacity: 0
        }, 400, mina.backin);
        svgLogement.style.pointerEvents = \"none\";
    } else {
        document.querySelector(\".logement\").style.zIndex = \"10\";
        itemsLogement.animate({
            transform: originalTransform,
            opacity: 1
        }, 1000, mina.elastic);
        svgLogement.style.pointerEvents = \"auto\";
    }
}

function toggleMenuTransport(event) {
    if (!event) var event = window.event;
    event.stopPropagation();
    openTransport = !openTransport;

    if (!openTransport) {
        itemsTransport.animate({
            transform: \"s0,0,250,250\",
            opacity: 0
        }, 400, mina.backin);
        svgTransport.style.pointerEvents = \"none\";
    } else {
        document.querySelector(\".transport\").style.zIndex = \"10\";
        itemsTransport.animate({
            transform: originalTransform,
            opacity: 1
        }, 1000, mina.elastic);
        svgTransport.style.pointerEvents = \"auto\";
    }
}

function toggleMenuComodite(event) {
    if (!event) var event = window.event;
    event.stopPropagation();
    openComodite = !openComodite;

    if (!openComodite) {
        itemsComodite.animate({
            transform: \"s0,0,250,250\",
            opacity: 0
        }, 400, mina.backin);
        svgComodite.style.pointerEvents = \"none\";
    } else {
        document.querySelector(\".comodite\").style.zIndex = \"10\";
        itemsComodite.animate({
            transform: originalTransform,
            opacity: 1
        }, 1000, mina.elastic);
        svgComodite.style.pointerEvents = \"auto\";
    }
}

svg.onclick = function (e) {
    e.stopPropagation();
}

//close the nav when document is clicked
document.onclick = function () {
    openSante = false;
    itemsSante.animate({
        transform: \"s0,0,250,250\",
        opacity: 0
    }, 400, mina.backin);
    svgSante.style.pointerEvents = \"none\";

    openFinance = false;
    itemsFinance.animate({
        transform: \"s0,0,250,250\",
        opacity: 0
    }, 400, mina.backin);
    svgFinance.style.pointerEvents = \"none\";

    openTransport = false;
    itemsTransport.animate({
        transform: \"s0,0,250,250\",
        opacity: 0
    }, 400, mina.backin);
    svgTransport.style.pointerEvents = \"none\";

    openComodite = false;
    itemsComodite.animate({
        transform: \"s0,0,250,250\",
        opacity: 0
    }, 400, mina.backin);
    svgComodite.style.pointerEvents = \"none\";

    openLogement = false;
    itemsLogement.animate({
        transform: \"s0,0,250,250\",
        opacity: 0
    }, 400, mina.backin);
    svgLogement.style.pointerEvents = \"none\";

    setTimeout(function(){ 
        document.querySelectorAll(\".overlay-camembert\").forEach(function(element) {
            element.style.zIndex = \"-1\";
        })
     }, 1000);
};
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 200,  319 => 199,  315 => 198,  311 => 197,  278 => 167,  274 => 166,  270 => 165,  266 => 164,  233 => 134,  229 => 133,  225 => 132,  221 => 131,  188 => 101,  184 => 100,  180 => 99,  176 => 98,  143 => 68,  139 => 67,  135 => 66,  131 => 65,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main_content %}  
    <div class=\"flex\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"-50 -50 600 600\" id=\"menu\">
            <g id=\"symbolsContainer\">
                <symbol class=\"icon icon-\" id=\"icon-1\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"home\" class=\"svg-inline--fa fa-home fa-w-18\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\"><path fill=\"currentColor\" d=\"M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"icon-2\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"heartbeat\" class=\"svg-inline--fa fa-heartbeat fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M320.2 243.8l-49.7 99.4c-6 12.1-23.4 11.7-28.9-.6l-56.9-126.3-30 71.7H60.6l182.5 186.5c7.1 7.3 18.6 7.3 25.7 0L451.4 288H342.3l-22.1-44.2zM473.7 73.9l-2.4-2.5c-51.5-52.6-135.8-52.6-187.4 0L256 100l-27.9-28.5c-51.5-52.7-135.9-52.7-187.4 0l-2.4 2.4C-10.4 123.7-12.5 203 31 256h102.4l35.9-86.2c5.4-12.9 23.6-13.2 29.4-.4l58.2 129.3 49-97.9c5.9-11.8 22.7-11.8 28.6 0l27.6 55.2H481c43.5-53 41.4-132.3-7.3-182.1z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"icon-3\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"piggy-bank\" class=\"svg-inline--fa fa-piggy-bank fa-w-18\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\"><path fill=\"currentColor\" d=\"M560 224h-29.5c-8.8-20-21.6-37.7-37.4-52.5L512 96h-32c-29.4 0-55.4 13.5-73 34.3-7.6-1.1-15.1-2.3-23-2.3H256c-77.4 0-141.9 55-156.8 128H56c-14.8 0-26.5-13.5-23.5-28.8C34.7 215.8 45.4 208 57 208h1c3.3 0 6-2.7 6-6v-20c0-3.3-2.7-6-6-6-28.5 0-53.9 20.4-57.5 48.6C-3.9 258.8 22.7 288 56 288h40c0 52.2 25.4 98.1 64 127.3V496c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16v-48h128v48c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16v-80.7c11.8-8.9 22.3-19.4 31.3-31.3H560c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16zm-128 64c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM256 96h128c5.4 0 10.7.4 15.9.8 0-.3.1-.5.1-.8 0-53-43-96-96-96s-96 43-96 96c0 2.1.5 4.1.6 6.2 15.2-3.9 31-6.2 47.4-6.2z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"icon-4\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"bicycle\" class=\"svg-inline--fa fa-bicycle fa-w-20\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><path fill=\"currentColor\" d=\"M512.509 192.001c-16.373-.064-32.03 2.955-46.436 8.495l-77.68-125.153A24 24 0 0 0 368.001 64h-64c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h50.649l14.896 24H256.002v-16c0-8.837-7.163-16-16-16h-87.459c-13.441 0-24.777 10.999-24.536 24.437.232 13.044 10.876 23.563 23.995 23.563h48.726l-29.417 47.52c-13.433-4.83-27.904-7.483-42.992-7.52C58.094 191.83.412 249.012.002 319.236-.413 390.279 57.055 448 128.002 448c59.642 0 109.758-40.793 123.967-96h52.033a24 24 0 0 0 20.406-11.367L410.37 201.77l14.938 24.067c-25.455 23.448-41.385 57.081-41.307 94.437.145 68.833 57.899 127.051 126.729 127.719 70.606.685 128.181-55.803 129.255-125.996 1.086-70.941-56.526-129.72-127.476-129.996zM186.75 265.772c9.727 10.529 16.673 23.661 19.642 38.228h-43.306l23.664-38.228zM128.002 400c-44.112 0-80-35.888-80-80s35.888-80 80-80c5.869 0 11.586.653 17.099 1.859l-45.505 73.509C89.715 331.327 101.213 352 120.002 352h81.3c-12.37 28.225-40.562 48-73.3 48zm162.63-96h-35.624c-3.96-31.756-19.556-59.894-42.383-80.026L237.371 184h127.547l-74.286 120zm217.057 95.886c-41.036-2.165-74.049-35.692-75.627-76.755-.812-21.121 6.633-40.518 19.335-55.263l44.433 71.586c4.66 7.508 14.524 9.816 22.032 5.156l13.594-8.437c7.508-4.66 9.817-14.524 5.156-22.032l-44.468-71.643a79.901 79.901 0 0 1 19.858-2.497c44.112 0 80 35.888 80 80-.001 45.54-38.252 82.316-84.313 79.885z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"icon-5\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"calendar-week\" class=\"svg-inline--fa fa-calendar-week fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z\"></path></svg>
                </symbol>
                
            </g>

            <g id=\"itemsContainer\">\t\t
                <a class=\"item\" id=\"item-1\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS1:target=\"_parent\" transform=\"matrix(1,0,0,1,0,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 327.25424859373686,12.235870926211618 z\"></path><use xlink:href=\"#icon-1\" width=\"40\" height=\"40\" x=\"367.53289794921875\" y=\"130.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\"></use><text x=\"330.53289794921875\" y=\"110.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\" >LOGEMENT</text></a>
                <a class=\"item\" id=\"item-2\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS2:target=\"_parent\" transform=\"matrix(0.30901,-0.95105,0.95105,0.30901,-65.01837766752521,410.5098804800515)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 327.25424859373686,12.235870926211618 z\"></path><use xlink:href=\"#icon-2\" width=\"40\" height=\"40\" x=\"367.53289794921875\" y=\"130.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\"></use><text x=\"352.53289794921875\" y=\"110.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\" >SANTÉ</text></a>
                <a class=\"item\" id=\"item-3\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS3:target=\"_parent\" transform=\"matrix(-0.80901,-0.58778,0.58778,-0.80901,305.3079355206185,599.2005616668552)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 327.25424859373686,12.235870926211618 z\"></path><use xlink:href=\"#icon-3\" width=\"40\" height=\"40\" x=\"367.53289794921875\" y=\"130.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\"></use><text x=\"345.53289794921875\" y=\"110.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\" >FINANCE</text></a>
                <a class=\"item\" id=\"item-4\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS4:target=\"_parent\" transform=\"matrix(-0.80901,0.58778,-0.58778,-0.80901,599.2005616668552,305.30793552061857)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 327.25424859373686,12.235870926211618 z\"></path><use xlink:href=\"#icon-4\" width=\"40\" height=\"40\" x=\"367.53289794921875\" y=\"130.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\"></use><text x=\"326.3289794921875\" y=\"110.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\" >TRANSPORT</text></a>
                <a class=\"item\" id=\"item-5\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS5:target=\"_parent\" transform=\"matrix(0.30901,0.95105,-0.95105,0.30901,410.5098804800516,-65.01837766752521)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 327.25424859373686,12.235870926211618 z\"></path><use xlink:href=\"#icon-5\" width=\"40\" height=\"40\" x=\"367.53289794921875\" y=\"130.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\"></use><text x=\"343.53289794921875\" y=\"110.07650756835938\" transform=\"rotate(54 387.53289794921875 150.07650756835938)\" >AUTRES</text></a>
            </g>

            <g id=\"trigger\" class=\"trigger menu-trigger\">
                <circle cx=\"250\" cy=\"250\" r=\"30\"></circle>
            </g>
        </svg>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js\"></script>
    </div>

    <div class=\"sante overlay-camembert\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"-50 -50 600 600\" id=\"menu-sante\">
            <g id=\"symbolsContainer-sante\">
                <symbol class=\"icon icon-\" id=\"sante-1\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"user-md\" class=\"svg-inline--fa fa-user-md fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zM104 424c0 13.3 10.7 24 24 24s24-10.7 24-24-10.7-24-24-24-24 10.7-24 24zm216-135.4v49c36.5 7.4 64 39.8 64 78.4v41.7c0 7.6-5.4 14.2-12.9 15.7l-32.2 6.4c-4.3.9-8.5-1.9-9.4-6.3l-3.1-15.7c-.9-4.3 1.9-8.6 6.3-9.4l19.3-3.9V416c0-62.8-96-65.1-96 1.9v26.7l19.3 3.9c4.3.9 7.1 5.1 6.3 9.4l-3.1 15.7c-.9 4.3-5.1 7.1-9.4 6.3l-31.2-4.2c-7.9-1.1-13.8-7.8-13.8-15.9V416c0-38.6 27.5-70.9 64-78.4v-45.2c-2.2.7-4.4 1.1-6.6 1.9-18 6.3-37.3 9.8-57.4 9.8s-39.4-3.5-57.4-9.8c-7.4-2.6-14.9-4.2-22.6-5.2v81.6c23.1 6.9 40 28.1 40 53.4 0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.3 16.9-46.5 40-53.4v-80.4C48.5 301 0 355.8 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-72-56.8-130.3-128-133.8z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"sante-2\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"wheelchair\" class=\"svg-inline--fa fa-wheelchair fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M496.101 385.669l14.227 28.663c3.929 7.915.697 17.516-7.218 21.445l-65.465 32.886c-16.049 7.967-35.556 1.194-43.189-15.055L331.679 320H192c-15.925 0-29.426-11.71-31.679-27.475C126.433 55.308 128.38 70.044 128 64c0-36.358 30.318-65.635 67.052-63.929 33.271 1.545 60.048 28.905 60.925 62.201.868 32.933-23.152 60.423-54.608 65.039l4.67 32.69H336c8.837 0 16 7.163 16 16v32c0 8.837-7.163 16-16 16H215.182l4.572 32H352a32 32 0 0 1 28.962 18.392L438.477 396.8l36.178-18.349c7.915-3.929 17.517-.697 21.446 7.218zM311.358 352h-24.506c-7.788 54.204-54.528 96-110.852 96-61.757 0-112-50.243-112-112 0-41.505 22.694-77.809 56.324-97.156-3.712-25.965-6.844-47.86-9.488-66.333C45.956 198.464 0 261.963 0 336c0 97.047 78.953 176 176 176 71.87 0 133.806-43.308 161.11-105.192L311.358 352z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"sante-3\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"venus-mars\" class=\"svg-inline--fa fa-venus-mars fa-w-18\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\"><path fill=\"currentColor\" d=\"M564 0h-79c-10.7 0-16 12.9-8.5 20.5l16.9 16.9-48.7 48.7C422.5 72.1 396.2 64 368 64c-33.7 0-64.6 11.6-89.2 30.9 14 16.7 25 36 32.1 57.1 14.5-14.8 34.7-24 57.1-24 44.1 0 80 35.9 80 80s-35.9 80-80 80c-22.3 0-42.6-9.2-57.1-24-7.1 21.1-18 40.4-32.1 57.1 24.5 19.4 55.5 30.9 89.2 30.9 79.5 0 144-64.5 144-144 0-28.2-8.1-54.5-22.1-76.7l48.7-48.7 16.9 16.9c2.4 2.4 5.4 3.5 8.4 3.5 6.2 0 12.1-4.8 12.1-12V12c0-6.6-5.4-12-12-12zM144 64C64.5 64 0 128.5 0 208c0 68.5 47.9 125.9 112 140.4V400H76c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h36v36c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-36h36c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-36v-51.6c64.1-14.6 112-71.9 112-140.4 0-79.5-64.5-144-144-144zm0 224c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"sante-4\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"phone-volume\" class=\"svg-inline--fa fa-phone-volume fa-w-12\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 384 512\"><path fill=\"currentColor\" d=\"M97.333 506.966c-129.874-129.874-129.681-340.252 0-469.933 5.698-5.698 14.527-6.632 21.263-2.422l64.817 40.513a17.187 17.187 0 0 1 6.849 20.958l-32.408 81.021a17.188 17.188 0 0 1-17.669 10.719l-55.81-5.58c-21.051 58.261-20.612 122.471 0 179.515l55.811-5.581a17.188 17.188 0 0 1 17.669 10.719l32.408 81.022a17.188 17.188 0 0 1-6.849 20.958l-64.817 40.513a17.19 17.19 0 0 1-21.264-2.422zM247.126 95.473c11.832 20.047 11.832 45.008 0 65.055-3.95 6.693-13.108 7.959-18.718 2.581l-5.975-5.726c-3.911-3.748-4.793-9.622-2.261-14.41a32.063 32.063 0 0 0 0-29.945c-2.533-4.788-1.65-10.662 2.261-14.41l5.975-5.726c5.61-5.378 14.768-4.112 18.718 2.581zm91.787-91.187c60.14 71.604 60.092 175.882 0 247.428-4.474 5.327-12.53 5.746-17.552.933l-5.798-5.557c-4.56-4.371-4.977-11.529-.93-16.379 49.687-59.538 49.646-145.933 0-205.422-4.047-4.85-3.631-12.008.93-16.379l5.798-5.557c5.022-4.813 13.078-4.394 17.552.933zm-45.972 44.941c36.05 46.322 36.108 111.149 0 157.546-4.39 5.641-12.697 6.251-17.856 1.304l-5.818-5.579c-4.4-4.219-4.998-11.095-1.285-15.931 26.536-34.564 26.534-82.572 0-117.134-3.713-4.836-3.115-11.711 1.285-15.931l5.818-5.579c5.159-4.947 13.466-4.337 17.856 1.304z\"></path></svg>
                </symbol>
            </g>

            <g id=\"itemsContainer-sante\">\t\t
            <a class=\"item\" id=\"item-1-sante\" xlink:href=\"{{ path(\"list\", {keyword: \"medecin\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS1:target=\"_parent\" transform=\"matrix(1,0,0,1,0,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#sante-1\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"320.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >MÉDECIN</text></a>
            <a class=\"item\" id=\"item-2-sante\" xlink:href=\"{{ path(\"list\", {keyword: \"handicap\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS2:target=\"_parent\" transform=\"matrix(0,-1,1,0,0,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#sante-2\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"310.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >HANDICAP</text></a>
            <a class=\"item\" id=\"item-3-sante\" xlink:href=\"{{ path(\"list\", {keyword: \"sexualite\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS3:target=\"_parent\" transform=\"matrix(-1,0,0,-1,500,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#sante-3\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"310.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >SEXUALITÉ</text></a>
            <a class=\"item\" id=\"item-4-sante\" xlink:href=\"{{ path(\"list\", {keyword: \"besoin_aide\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS4:target=\"_parent\" transform=\"matrix(0,1,-1,0,500.00000000000006,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#sante-4\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"295.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >BESOIN D'AIDE</text></a>

            <g id=\"trigger-sante\" class=\"trigger menu-trigger\">
                <circle cx=\"250\" cy=\"250\" r=\"30\"></circle>
            </g>
        </svg>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js\"></script>
    </div>

    <div class=\"finance overlay-camembert\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"-50 -50 600 600\" id=\"menu-finance\">
            <g id=\"symbolsContainer-finance\">
                <symbol class=\"icon icon-\" id=\"finance-1\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"copy\" class=\"svg-inline--fa fa-copy fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M320 448v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V120c0-13.255 10.745-24 24-24h72v296c0 30.879 25.121 56 56 56h168zm0-344V0H152c-13.255 0-24 10.745-24 24v368c0 13.255 10.745 24 24 24h272c13.255 0 24-10.745 24-24V128H344c-13.2 0-24-10.8-24-24zm120.971-31.029L375.029 7.029A24 24 0 0 0 358.059 0H352v96h96v-6.059a24 24 0 0 0-7.029-16.97z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"finance-2\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" data-icon=\"cuttlefish\" class=\"svg-inline--fa fa-cuttlefish fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 440 512\"><path fill=\"currentColor\" d=\"M344 305.5c-17.5 31.6-57.4 54.5-96 54.5-56.6 0-104-47.4-104-104s47.4-104 104-104c38.6 0 78.5 22.9 96 54.5 13.7-50.9 41.7-93.3 87-117.8C385.7 39.1 320.5 8 248 8 111 8 0 119 0 256s111 248 248 248c72.5 0 137.7-31.1 183-80.7-45.3-24.5-73.3-66.9-87-117.8z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"finance-3\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"suitcase\" class=\"svg-inline--fa fa-suitcase fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M128 480h256V80c0-26.5-21.5-48-48-48H176c-26.5 0-48 21.5-48 48v400zm64-384h128v32H192V96zm320 80v256c0 26.5-21.5 48-48 48h-48V128h48c26.5 0 48 21.5 48 48zM96 480H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48h48v352z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"finance-4\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"money-check-alt\" class=\"svg-inline--fa fa-money-check-alt fa-w-20\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><path fill=\"currentColor\" d=\"M608 32H32C14.33 32 0 46.33 0 64v384c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zM176 327.88V344c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-16.29c-11.29-.58-22.27-4.52-31.37-11.35-3.9-2.93-4.1-8.77-.57-12.14l11.75-11.21c2.77-2.64 6.89-2.76 10.13-.73 3.87 2.42 8.26 3.72 12.82 3.72h28.11c6.5 0 11.8-5.92 11.8-13.19 0-5.95-3.61-11.19-8.77-12.73l-45-13.5c-18.59-5.58-31.58-23.42-31.58-43.39 0-24.52 19.05-44.44 42.67-45.07V152c0-4.42 3.58-8 8-8h16c4.42 0 8 3.58 8 8v16.29c11.29.58 22.27 4.51 31.37 11.35 3.9 2.93 4.1 8.77.57 12.14l-11.75 11.21c-2.77 2.64-6.89 2.76-10.13.73-3.87-2.43-8.26-3.72-12.82-3.72h-28.11c-6.5 0-11.8 5.92-11.8 13.19 0 5.95 3.61 11.19 8.77 12.73l45 13.5c18.59 5.58 31.58 23.42 31.58 43.39 0 24.53-19.05 44.44-42.67 45.07zM416 312c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h112c4.42 0 8 3.58 8 8v16zm160 0c0 4.42-3.58 8-8 8h-80c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16zm0-96c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h272c4.42 0 8 3.58 8 8v16z\"></path></svg>
                </symbol>
            </g>

            <g id=\"itemsContainer-finance\">\t\t
            <a class=\"item\" id=\"item-1-finance\" xlink:href=\"{{ path(\"list\", {keyword: \"apl\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS1:target=\"_parent\" transform=\"matrix(1,0,0,1,0,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#finance-1\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"350.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >APL</text></a>
            <a class=\"item\" id=\"item-2-finance\" xlink:href=\"{{ path(\"list\", {keyword: \"crous\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS2:target=\"_parent\" transform=\"matrix(0,-1,1,0,0,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#finance-2\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"330.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >CROUS</text></a>
            <a class=\"item\" id=\"item-3-finance\" xlink:href=\"{{ path(\"list\", {keyword: \"job\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS3:target=\"_parent\" transform=\"matrix(-1,0,0,-1,500,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#finance-3\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"340.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >JOBS</text></a>
            <a class=\"item\" id=\"item-4-finance\" xlink:href=\"{{ path(\"list\", {keyword: \"impots\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS4:target=\"_parent\" transform=\"matrix(0,1,-1,0,500.00000000000006,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#finance-4\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"335.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >IMPÔT</text></a>

            <g id=\"trigger-finance\" class=\"trigger menu-trigger\">
                <circle cx=\"250\" cy=\"250\" r=\"30\"></circle>
            </g>
        </svg>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js\"></script>
    </div>

    <div class=\"logement overlay-camembert\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"-50 -50 600 600\" id=\"menu-logement\">
            <g id=\"symbolsContainer-logement\">
                <symbol class=\"icon icon-\" id=\"logement-1\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"hands-helping\" class=\"svg-inline--fa fa-hands-helping fa-w-20\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><path fill=\"currentColor\" d=\"M488 192H336v56c0 39.7-32.3 72-72 72s-72-32.3-72-72V126.4l-64.9 39C107.8 176.9 96 197.8 96 220.2v47.3l-80 46.2C.7 322.5-4.6 342.1 4.3 357.4l80 138.6c8.8 15.3 28.4 20.5 43.7 11.7L231.4 448H368c35.3 0 64-28.7 64-64h16c17.7 0 32-14.3 32-32v-64h8c13.3 0 24-10.7 24-24v-48c0-13.3-10.7-24-24-24zm147.7-37.4L555.7 16C546.9.7 527.3-4.5 512 4.3L408.6 64H306.4c-12 0-23.7 3.4-33.9 9.7L239 94.6c-9.4 5.8-15 16.1-15 27.1V248c0 22.1 17.9 40 40 40s40-17.9 40-40v-88h184c30.9 0 56 25.1 56 56v28.5l80-46.2c15.3-8.9 20.5-28.4 11.7-43.7z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"logement-2\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" data-icon=\"cuttlefish\" class=\"svg-inline--fa fa-cuttlefish fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 440 512\"><path fill=\"currentColor\" d=\"M344 305.5c-17.5 31.6-57.4 54.5-96 54.5-56.6 0-104-47.4-104-104s47.4-104 104-104c38.6 0 78.5 22.9 96 54.5 13.7-50.9 41.7-93.3 87-117.8C385.7 39.1 320.5 8 248 8 111 8 0 119 0 256s111 248 248 248c72.5 0 137.7-31.1 183-80.7-45.3-24.5-73.3-66.9-87-117.8z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"logement-3\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"campground\" class=\"svg-inline--fa fa-campground fa-w-20\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><path fill=\"currentColor\" d=\"M624 448h-24.68L359.54 117.75l53.41-73.55c5.19-7.15 3.61-17.16-3.54-22.35l-25.9-18.79c-7.15-5.19-17.15-3.61-22.35 3.55L320 63.3 278.83 6.6c-5.19-7.15-15.2-8.74-22.35-3.55l-25.88 18.8c-7.15 5.19-8.74 15.2-3.54 22.35l53.41 73.55L40.68 448H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h608c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM320 288l116.36 160H203.64L320 288z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"logement-4\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"building\" class=\"svg-inline--fa fa-building fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M436 480h-20V24c0-13.255-10.745-24-24-24H56C42.745 0 32 10.745 32 24v456H12c-6.627 0-12 5.373-12 12v20h448v-20c0-6.627-5.373-12-12-12zM128 76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76zm0 96c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40zm52 148h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12zm76 160h-64v-84c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v84zm64-172c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40z\"></path></svg>
                </symbol>
            </g>

            <g id=\"itemsContainer-logement\">\t\t
            <a class=\"item\" id=\"item-1-logement\" xlink:href=\"{{ path(\"list\", {keyword: \"aide_log\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS1:target=\"_parent\" transform=\"matrix(1,0,0,1,0,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#logement-1\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"335.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >AIDES</text></a>
            <a class=\"item\" id=\"item-2-logement\" xlink:href=\"{{ path(\"list\", {keyword: \"crous\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS2:target=\"_parent\" transform=\"matrix(0,-1,1,0,0,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#logement-2\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"330.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >CROUS</text></a>
            <a class=\"item\" id=\"item-3-logement\" xlink:href=\"{{ path(\"list\", {keyword: \"urgence_log\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS3:target=\"_parent\" transform=\"matrix(-1,0,0,-1,500,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#logement-3\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"320.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >URGENCE</text></a>
            <a class=\"item\" id=\"item-4-logement\" xlink:href=\"{{ path(\"list\", {keyword: \"rechercher_log\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS4:target=\"_parent\" transform=\"matrix(0,1,-1,0,500.00000000000006,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#logement-4\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"300.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >RECHERCHER</text></a>

            <g id=\"trigger-logement\" class=\"trigger menu-trigger\">
                <circle cx=\"250\" cy=\"250\" r=\"30\"></circle>
            </g>
        </svg>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js\"></script>
    </div>

    <div class=\"transport overlay-camembert\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"-50 -50 600 600\" id=\"menu-transport\">
            <g id=\"symbolsContainer-transport\">
                <symbol class=\"icon icon-\" id=\"transport-1\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"bicycle\" class=\"svg-inline--fa fa-bicycle fa-w-20\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><path fill=\"currentColor\" d=\"M512.509 192.001c-16.373-.064-32.03 2.955-46.436 8.495l-77.68-125.153A24 24 0 0 0 368.001 64h-64c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h50.649l14.896 24H256.002v-16c0-8.837-7.163-16-16-16h-87.459c-13.441 0-24.777 10.999-24.536 24.437.232 13.044 10.876 23.563 23.995 23.563h48.726l-29.417 47.52c-13.433-4.83-27.904-7.483-42.992-7.52C58.094 191.83.412 249.012.002 319.236-.413 390.279 57.055 448 128.002 448c59.642 0 109.758-40.793 123.967-96h52.033a24 24 0 0 0 20.406-11.367L410.37 201.77l14.938 24.067c-25.455 23.448-41.385 57.081-41.307 94.437.145 68.833 57.899 127.051 126.729 127.719 70.606.685 128.181-55.803 129.255-125.996 1.086-70.941-56.526-129.72-127.476-129.996zM186.75 265.772c9.727 10.529 16.673 23.661 19.642 38.228h-43.306l23.664-38.228zM128.002 400c-44.112 0-80-35.888-80-80s35.888-80 80-80c5.869 0 11.586.653 17.099 1.859l-45.505 73.509C89.715 331.327 101.213 352 120.002 352h81.3c-12.37 28.225-40.562 48-73.3 48zm162.63-96h-35.624c-3.96-31.756-19.556-59.894-42.383-80.026L237.371 184h127.547l-74.286 120zm217.057 95.886c-41.036-2.165-74.049-35.692-75.627-76.755-.812-21.121 6.633-40.518 19.335-55.263l44.433 71.586c4.66 7.508 14.524 9.816 22.032 5.156l13.594-8.437c7.508-4.66 9.817-14.524 5.156-22.032l-44.468-71.643a79.901 79.901 0 0 1 19.858-2.497c44.112 0 80 35.888 80 80-.001 45.54-38.252 82.316-84.313 79.885z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"transport-2\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"bus\" class=\"svg-inline--fa fa-bus fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M488 128h-8V80c0-44.8-99.2-80-224-80S32 35.2 32 80v48h-8c-13.25 0-24 10.74-24 24v80c0 13.25 10.75 24 24 24h8v160c0 17.67 14.33 32 32 32v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h192v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h6.4c16 0 25.6-12.8 25.6-25.6V256h8c13.25 0 24-10.75 24-24v-80c0-13.26-10.75-24-24-24zM112 400c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm16-112c-17.67 0-32-14.33-32-32V128c0-17.67 14.33-32 32-32h256c17.67 0 32 14.33 32 32v128c0 17.67-14.33 32-32 32H128zm272 112c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"transport-3\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"train\" class=\"svg-inline--fa fa-train fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M448 96v256c0 51.815-61.624 96-130.022 96l62.98 49.721C386.905 502.417 383.562 512 376 512H72c-7.578 0-10.892-9.594-4.957-14.279L130.022 448C61.82 448 0 403.954 0 352V96C0 42.981 64 0 128 0h192c65 0 128 42.981 128 96zm-48 136V120c0-13.255-10.745-24-24-24H72c-13.255 0-24 10.745-24 24v112c0 13.255 10.745 24 24 24h304c13.255 0 24-10.745 24-24zm-176 64c-30.928 0-56 25.072-56 56s25.072 56 56 56 56-25.072 56-56-25.072-56-56-56z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"transport-4\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"address-card\" class=\"svg-inline--fa fa-address-card fa-w-18\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\"><path fill=\"currentColor\" d=\"M528 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-352 96c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H86.4C74 384 64 375.4 64 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2zM512 312c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-64c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-64c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z\"></path></svg>
                </symbol>
            </g>

            <g id=\"itemsContainer-transport\">\t\t
            <a class=\"item\" id=\"item-1-transport\" xlink:href=\"{{ path(\"list\", {keyword: \"velos\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS1:target=\"_parent\" transform=\"matrix(1,0,0,1,0,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#transport-1\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"335.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >VÉLOS</text></a>
            <a class=\"item\" id=\"item-2-transport\" xlink:href=\"{{ path(\"list\", {keyword: \"bus\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS2:target=\"_parent\" transform=\"matrix(0,-1,1,0,0,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#transport-2\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"350.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >BUS</text></a>
            <a class=\"item\" id=\"item-3-transport\" xlink:href=\"{{ path(\"list\", {keyword: \"trains\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS3:target=\"_parent\" transform=\"matrix(-1,0,0,-1,500,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#transport-3\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"330.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >TRAINS</text></a>
            <a class=\"item\" id=\"item-4-transport\" xlink:href=\"{{ path(\"list\", {keyword: \"abonnement\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS4:target=\"_parent\" transform=\"matrix(0,1,-1,0,500.00000000000006,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#transport-4\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"290.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >ABONNEMENT</text></a>

            <g id=\"trigger-transport\" class=\"trigger menu-trigger\">
                <circle cx=\"250\" cy=\"250\" r=\"30\"></circle>
            </g>
        </svg>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js\"></script>
    </div>

    <div class=\"comodite overlay-camembert\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"-50 -50 600 600\" id=\"menu-comodite\">
            <g id=\"symbolsContainer-comodite\">
                <symbol class=\"icon icon-\" id=\"comodite-1\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"coins\" class=\"svg-inline--fa fa-coins fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M0 405.3V448c0 35.3 86 64 192 64s192-28.7 192-64v-42.7C342.7 434.4 267.2 448 192 448S41.3 434.4 0 405.3zM320 128c106 0 192-28.7 192-64S426 0 320 0 128 28.7 128 64s86 64 192 64zM0 300.4V352c0 35.3 86 64 192 64s192-28.7 192-64v-51.6c-41.3 34-116.9 51.6-192 51.6S41.3 334.4 0 300.4zm416 11c57.3-11.1 96-31.7 96-55.4v-42.7c-23.2 16.4-57.3 27.6-96 34.5v63.6zM192 160C86 160 0 195.8 0 240s86 80 192 80 192-35.8 192-80-86-80-192-80zm219.3 56.3c60-10.8 100.7-32 100.7-56.3v-42.7c-35.5 25.1-96.5 38.6-160.7 41.8 29.5 14.3 51.2 33.5 60 57.2z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"comodite-2\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"calendar-week\" class=\"svg-inline--fa fa-calendar-week fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"comodite-3\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"glass-cheers\" class=\"svg-inline--fa fa-glass-cheers fa-w-20\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><path fill=\"currentColor\" d=\"M639.4 433.6c-8.4-20.4-31.8-30.1-52.2-21.6l-22.1 9.2-38.7-101.9c47.9-35 64.8-100.3 34.5-152.8L474.3 16c-8-13.9-25.1-19.7-40-13.6L320 49.8 205.7 2.4c-14.9-6.2-32-.3-40 13.6L79.1 166.5C48.9 219 65.7 284.3 113.6 319.2L74.9 421.1l-22.1-9.2c-20.4-8.5-43.7 1.2-52.2 21.6-1.7 4.1.2 8.8 4.3 10.5l162.3 67.4c4.1 1.7 8.7-.2 10.4-4.3 8.4-20.4-1.2-43.8-21.6-52.3l-22.1-9.2L173.3 342c4.4.5 8.8 1.3 13.1 1.3 51.7 0 99.4-33.1 113.4-85.3l20.2-75.4 20.2 75.4c14 52.2 61.7 85.3 113.4 85.3 4.3 0 8.7-.8 13.1-1.3L506 445.6l-22.1 9.2c-20.4 8.5-30.1 31.9-21.6 52.3 1.7 4.1 6.4 6 10.4 4.3L635.1 444c4-1.7 6-6.3 4.3-10.4zM275.9 162.1l-112.1-46.5 36.5-63.4 94.5 39.2-18.9 70.7zm88.2 0l-18.9-70.7 94.5-39.2 36.5 63.4-112.1 46.5z\"></path></svg>
                </symbol>

                <symbol class=\"icon icon-\" id=\"comodite-4\" viewBox=\"0 0 40 40\">
                    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"handshake\" class=\"svg-inline--fa fa-handshake fa-w-20\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><path fill=\"currentColor\" d=\"M434.7 64h-85.9c-8 0-15.7 3-21.6 8.4l-98.3 90c-.1.1-.2.3-.3.4-16.6 15.6-16.3 40.5-2.1 56 12.7 13.9 39.4 17.6 56.1 2.7.1-.1.3-.1.4-.2l79.9-73.2c6.5-5.9 16.7-5.5 22.6 1 6 6.5 5.5 16.6-1 22.6l-26.1 23.9L504 313.8c2.9 2.4 5.5 5 7.9 7.7V128l-54.6-54.6c-5.9-6-14.1-9.4-22.6-9.4zM544 128.2v223.9c0 17.7 14.3 32 32 32h64V128.2h-96zm48 223.9c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM0 384h64c17.7 0 32-14.3 32-32V128.2H0V384zm48-63.9c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16c0-8.9 7.2-16 16-16zm435.9 18.6L334.6 217.5l-30 27.5c-29.7 27.1-75.2 24.5-101.7-4.4-26.9-29.4-24.8-74.9 4.4-101.7L289.1 64h-83.8c-8.5 0-16.6 3.4-22.6 9.4L128 128v223.9h18.3l90.5 81.9c27.4 22.3 67.7 18.1 90-9.3l.2-.2 17.9 15.5c15.9 13 39.4 10.5 52.3-5.4l31.4-38.6 5.4 4.4c13.7 11.1 33.9 9.1 45-4.7l9.5-11.7c11.2-13.8 9.1-33.9-4.6-45.1z\"></path></svg>
                </symbol>
            </g>

            <g id=\"itemsContainer-comodite\">\t\t
            <a class=\"item\" id=\"item-1-comodite\" xlink:href=\"{{ path(\"list\", {keyword: \"petit_budget\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS1:target=\"_parent\" transform=\"matrix(1,0,0,1,0,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#comodite-1\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"297.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >PETIT BUDGET</text></a>
            <a class=\"item\" id=\"item-2-comodite\" xlink:href=\"{{ path(\"list\", {keyword: \"agenda\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS2:target=\"_parent\" transform=\"matrix(0,-1,1,0,0,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#comodite-2\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"322.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >AGENDA</text></a>
            <a class=\"item\" id=\"item-3-comodite\" xlink:href=\"{{ path(\"list\", {keyword: \"loisirs\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS3:target=\"_parent\" transform=\"matrix(-1,0,0,-1,500,500)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#comodite-3\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"330.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >LOISIRS</text></a>
            <a class=\"item\" id=\"item-4-comodite\" xlink:href=\"{{ path(\"list\", {keyword: \"rencontres\"})}}\" xlink:title=\"\" role=\"link\" tabindex=\"0\" NS4:target=\"_parent\" transform=\"matrix(0,1,-1,0,500.00000000000006,0)\" data-svg-origin=\"250 250\" style=\"\"><path fill=\"none\" stroke=\"#111\" stroke-width=\"1\" class=\"sector\" d=\"M250,250 l250,0 A250,250 0 0,0 250.00000000000003,0 z\"></path><use xlink:href=\"#comodite-4\" width=\"40\" height=\"40\" x=\"350.2081604003906\" y=\"109.79185485839844\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\"></use><text x=\"293.53289794921875\" y=\"90.07650756835938\" transform=\"rotate(45 370.2081604003906 129.79185485839844)\" >RENCONTRES</text></a>

            <g id=\"trigger-comodite\" class=\"trigger menu-trigger\">
                <circle cx=\"250\" cy=\"250\" r=\"30\"></circle>
            </g>
        </svg>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js\"></script>
    </div>

    <script>
    var svg = document.getElementById('menu'),
    itemsContainer = document.getElementById('itemsContainer'),
    trigger = document.getElementById('trigger'),
    label = trigger.querySelectorAll('#label')[0],
    items = Snap(itemsContainer),
    originalTransform = itemsContainer.getAttribute(\"transform\"),
    open = false;

    var svgSante = document.getElementById('menu-sante'),
    itemsContainerSante = document.getElementById('itemsContainer-sante'),
    triggerSante = document.getElementById('trigger-sante'),
    labelSante = triggerSante.querySelectorAll('#label')[0],
    itemsSante = Snap(itemsContainerSante),
    originalTransformSante = itemsContainerSante.getAttribute(\"transform\"),
    openSante = false;

    var svgFinance = document.getElementById('menu-finance'),
    itemsContainerFinance = document.getElementById('itemsContainer-finance'),
    triggerFinance = document.getElementById('trigger-finance'),
    labelFinance = triggerFinance.querySelectorAll('#label')[0],
    itemsFinance = Snap(itemsContainerFinance),
    originalTransformFinance = itemsContainerFinance.getAttribute(\"transform\"),
    openFinance = false;

    var svgLogement = document.getElementById('menu-logement'),
    itemsContainerLogement = document.getElementById('itemsContainer-logement'),
    triggerLogement = document.getElementById('trigger-logement'),
    labelLogement = triggerLogement.querySelectorAll('#label')[0],
    itemsLogement = Snap(itemsContainerLogement),
    originalTransformLogement = itemsContainerLogement.getAttribute(\"transform\"),
    openLogement = false;

    var svgTransport = document.getElementById('menu-transport'),
    itemsContainerTransport = document.getElementById('itemsContainer-transport'),
    triggerTransport = document.getElementById('trigger-transport'),
    labelTransport = triggerTransport.querySelectorAll('#label')[0],
    itemsTransport = Snap(itemsContainerTransport),
    originalTransformTransport = itemsContainerTransport.getAttribute(\"transform\"),
    openTransport = false;

    var svgComodite = document.getElementById('menu-comodite'),
    itemsContainerComodite = document.getElementById('itemsContainer-comodite'),
    triggerComodite = document.getElementById('trigger-comodite'),
    labelComodite = triggerComodite.querySelectorAll('#label')[0],
    itemsComodite = Snap(itemsContainerComodite),
    originalTransformComodite = itemsContainerComodite.getAttribute(\"transform\"),
    openComodite = false;

//close items
itemsSante.animate({
    transform: \"s0,0,250,250\",
    opacity: 0
}, .005);
svgSante.style.pointerEvents = \"none\";

itemsFinance.animate({
    transform: \"s0,0,250,250\",
    opacity: 0
}, .005);
svgFinance.style.pointerEvents = \"none\";

itemsLogement.animate({
    transform: \"s0,0,250,250\",
    opacity: 0
}, .005);
svgLogement.style.pointerEvents = \"none\";

itemsTransport.animate({
    transform: \"s0,0,250,250\",
    opacity: 0
}, .005);
svgTransport.style.pointerEvents = \"none\";

itemsComodite.animate({
    transform: \"s0,0,250,250\",
    opacity: 0
}, .005);
svgComodite.style.pointerEvents = \"none\";

//attach listener
//trigger.addEventListener('click', toggleMenu, false);


document.querySelector(\"#item-1\").addEventListener('click', toggleMenuLogement, false);
document.querySelector(\"#item-2\").addEventListener('click', toggleMenuSante, false);
document.querySelector(\"#item-3\").addEventListener('click', toggleMenuComodite, false);
document.querySelector(\"#item-4\").addEventListener('click', toggleMenuTransport, false);
document.querySelector(\"#item-5\").addEventListener('click', toggleMenuFinance, false);


//handle click
function toggleMenuSante(event) {
    if (!event) var event = window.event;
    event.stopPropagation();
    openSante = !openSante;

    if (!openSante) {
        itemsSante.animate({
            transform: \"s0,0,250,250\",
            opacity: 0
        }, 400, mina.backin);
        svgSante.style.pointerEvents = \"none\";
    } else {
        document.querySelector(\".sante\").style.zIndex = \"10\";
        itemsSante.animate({
            transform: originalTransform,
            opacity: 1
        }, 1000, mina.elastic);
        svgSante.style.pointerEvents = \"auto\";
    }
}

function toggleMenuFinance(event) {
    if (!event) var event = window.event;
    event.stopPropagation();
    openFinance = !openFinance;

    if (!openFinance) {
        itemsFinance.animate({
            transform: \"s0,0,250,250\",
            opacity: 0
        }, 400, mina.backin);
        svgFinance.style.pointerEvents = \"none\";
    } else {
        document.querySelector(\".finance\").style.zIndex = \"10\";
        itemsFinance.animate({
            transform: originalTransform,
            opacity: 1
        }, 1000, mina.elastic);
        svgFinance.style.pointerEvents = \"auto\";
    }
}

function toggleMenuLogement(event) {
    if (!event) var event = window.event;
    event.stopPropagation();
    openLogement = !openLogement;

    if (!openLogement) {
        itemsLogement.animate({
            transform: \"s0,0,250,250\",
            opacity: 0
        }, 400, mina.backin);
        svgLogement.style.pointerEvents = \"none\";
    } else {
        document.querySelector(\".logement\").style.zIndex = \"10\";
        itemsLogement.animate({
            transform: originalTransform,
            opacity: 1
        }, 1000, mina.elastic);
        svgLogement.style.pointerEvents = \"auto\";
    }
}

function toggleMenuTransport(event) {
    if (!event) var event = window.event;
    event.stopPropagation();
    openTransport = !openTransport;

    if (!openTransport) {
        itemsTransport.animate({
            transform: \"s0,0,250,250\",
            opacity: 0
        }, 400, mina.backin);
        svgTransport.style.pointerEvents = \"none\";
    } else {
        document.querySelector(\".transport\").style.zIndex = \"10\";
        itemsTransport.animate({
            transform: originalTransform,
            opacity: 1
        }, 1000, mina.elastic);
        svgTransport.style.pointerEvents = \"auto\";
    }
}

function toggleMenuComodite(event) {
    if (!event) var event = window.event;
    event.stopPropagation();
    openComodite = !openComodite;

    if (!openComodite) {
        itemsComodite.animate({
            transform: \"s0,0,250,250\",
            opacity: 0
        }, 400, mina.backin);
        svgComodite.style.pointerEvents = \"none\";
    } else {
        document.querySelector(\".comodite\").style.zIndex = \"10\";
        itemsComodite.animate({
            transform: originalTransform,
            opacity: 1
        }, 1000, mina.elastic);
        svgComodite.style.pointerEvents = \"auto\";
    }
}

svg.onclick = function (e) {
    e.stopPropagation();
}

//close the nav when document is clicked
document.onclick = function () {
    openSante = false;
    itemsSante.animate({
        transform: \"s0,0,250,250\",
        opacity: 0
    }, 400, mina.backin);
    svgSante.style.pointerEvents = \"none\";

    openFinance = false;
    itemsFinance.animate({
        transform: \"s0,0,250,250\",
        opacity: 0
    }, 400, mina.backin);
    svgFinance.style.pointerEvents = \"none\";

    openTransport = false;
    itemsTransport.animate({
        transform: \"s0,0,250,250\",
        opacity: 0
    }, 400, mina.backin);
    svgTransport.style.pointerEvents = \"none\";

    openComodite = false;
    itemsComodite.animate({
        transform: \"s0,0,250,250\",
        opacity: 0
    }, 400, mina.backin);
    svgComodite.style.pointerEvents = \"none\";

    openLogement = false;
    itemsLogement.animate({
        transform: \"s0,0,250,250\",
        opacity: 0
    }, 400, mina.backin);
    svgLogement.style.pointerEvents = \"none\";

    setTimeout(function(){ 
        document.querySelectorAll(\".overlay-camembert\").forEach(function(element) {
            element.style.zIndex = \"-1\";
        })
     }, 1000);
};
    </script>
{% endblock %}
", "main/index.html.twig", "/root/docker/pingouin-du-web/apps/my-symfony-app/templates/main/index.html.twig");
    }
}
