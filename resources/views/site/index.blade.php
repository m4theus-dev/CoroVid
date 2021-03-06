@extends('site.layouts.layout')


@section('content')

    <!--[CONTEUDO:Inicio]-->
    <div class="container">
        <div class="conteudo">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 text-tuncate wow fadeInUp">
                        <div class="card">
                            <div class="titulo">{{ $dados["cidade"]["coromandel"]["nome_cidade"] }}</div>
                            <div class="infos">
                                <div class="row inf2">
                                    <div class="col">Casos Confirmados:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["coromandel"]["casos_confirmados"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Casos Suspeitos:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["coromandel"]["casos_suspeitos"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Casos Descartados:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["coromandel"]["casos_descartados"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Mortes:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["coromandel"]["obitos"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Isolamento Domiciliar:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["coromandel"]["isolamento_domiciliar"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Exames Coletados:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["coromandel"]["exames_coletados"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Recuperados:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["coromandel"]["recuperados"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                            </div>
                            <div class="footer">
                                <div class="row inf2">
                                    <div class="col">Atualizado em <e>{{ $dados["cidade"]["coromandel"]["data"] }}</e>.
                                    </div>
                                    <div class="col-auto">Fonte: <a
                                            href="{{ $dados["cidade"]["coromandel"]["fonte_link"] }}"
                                            target="_blank">{{ $dados["cidade"]["coromandel"]["fonte_nome"] }}</a>. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-tuncate wow fadeInUp">
                        <div class="card">
                            <div class="titulo">{{ $dados["cidade"]["abadia_dos_dourados"]["nome_cidade"] }}</div>
                            <div class="infos">
                                <div class="row inf2">
                                    <div class="col">Casos Confirmados:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["abadia_dos_dourados"]["casos_confirmados"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Casos Suspeitos:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["abadia_dos_dourados"]["casos_suspeitos"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Casos Descartados:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["abadia_dos_dourados"]["casos_descartados"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Mortes:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["abadia_dos_dourados"]["obitos"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Isolamento Domiciliar:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["abadia_dos_dourados"]["isolamento_domiciliar"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Exames Coletados:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["abadia_dos_dourados"]["exames_coletados"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Recuperados:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["abadia_dos_dourados"]["recuperados"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                            </div>
                            <div class="footer">
                                <div class="row inf2">
                                    <div class="col">Atualizado em <e>{{ $dados["cidade"]["abadia_dos_dourados"]["data"] }}</e>.
                                    </div>
                                    <div class="col-auto">Fonte: <a
                                            href="{{ $dados["cidade"]["abadia_dos_dourados"]["fonte_link"] }}"
                                            target="_blank">{{ $dados["cidade"]["abadia_dos_dourados"]["fonte_nome"] }}</a>. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-tuncate wow fadeInUp">
                        <div class="card">
                            <div class="titulo">{{ $dados["cidade"]["monte_carmelo"]["nome_cidade"] }}</div>
                            <div class="infos">
                                <div class="row inf2">
                                    <div class="col">Casos Confirmados:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["monte_carmelo"]["casos_confirmados"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Casos Suspeitos:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["monte_carmelo"]["casos_suspeitos"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Casos Descartados:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["monte_carmelo"]["casos_descartados"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Mortes:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["monte_carmelo"]["obitos"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Isolamento Domiciliar:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["monte_carmelo"]["isolamento_domiciliar"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Exames Coletados:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["monte_carmelo"]["exames_coletados"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Recuperados:</div>
                                    <div class="col-auto count">{{ $dados["cidade"]["monte_carmelo"]["recuperados"] }}
                                    </div>
                                </div>
                                <hr class="hr2">
                            </div>
                            <div class="footer">
                                <div class="row inf2">
                                    <div class="col">Atualizado em <e>{{ $dados["cidade"]["monte_carmelo"]["data"] }}</e>.
                                    </div>
                                    <div class="col-auto">Fonte: <a
                                            href="{{ $dados["cidade"]["monte_carmelo"]["fonte_link"] }}"
                                            target="_blank">{{ $dados["cidade"]["monte_carmelo"]["fonte_nome"] }}</a>. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-tuncate wow fadeInUp">
                        <div class="card">
                            <div class="titulo">Brasil</div>
                            <div class="infos">
                                <div class="row inf2">
                                    <div class="col">Confirmados:</div>
                                    <div class="col-auto count">{{ $dadosBrazil["totalCases"] }}</div>
                                </div>
                                <hr class="hr2">
                                <div class="row inf2">
                                    <div class="col">Óbitos:</div>
                                    <div class="col-auto count">{{ $dadosBrazil["deaths"] }}</div>
                                </div>
                                <hr class="hr2">
                            </div>
                            <div class="footer">
                                <div class="row inf2">
                                    <div class="col">Atualizado em <e> {{ $data }}</e>.
                                    </div>
                                    <div class="col-auto">Fonte:
                                        <a href="https://covid19-brazil-api.now.sh/" target="_blank">WHO e Ministério da Saúde</a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--[CONTEUDO:Fim]-->

@endsection