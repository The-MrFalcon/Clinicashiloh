<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        return view('template/header/header')
            . view('template/banner/banner_blog')
            . view('template/pages/blog/blogindex')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function ciclo_menstrual()
    {
        return view('template/header/header')
            . view('template/pages/blog/ciclo_menstrual')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function espermograma()
    {
        return view('template/header/header')
            . view('template/pages/blog/espermograma')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function ovorecepcao()
    {
        return view('template/header/header')
            . view('template/pages/blog/ovorecepcao')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function fiv()
    {
        return view('template/header/header')
            . view('template/pages/blog/fiv')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function ovodoacao()
    {
        return view('template/header/header')
            . view('template/pages/blog/ovodoacao')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function alimentacao()
    {
        return view('template/header/header')
            . view('template/pages/blog/alimentacao')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function melhorar_fertilidade()
    {
        return view('template/header/header')
            . view('template/pages/blog/melhorar-fertilidade')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function obesidade()
    {
        return view('template/header/header')
            . view('template/pages/blog/obesidade')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function dna()
    {
        return view('template/header/header')
            . view('template/pages/blog/dna')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function infertilidade()
    {
        return view('template/header/header')
            . view('template/pages/blog/infertilidade')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function avancada()
    {
        return view('template/header/header')
            . view('template/pages/blog/avancada')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function novembro_azul()
    {
        return view('template/header/header')
            . view('template/pages/blog/novembro-azul')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function producao_independente()
    {
        return view('template/header/header')
            . view('template/pages/blog/producao-independente')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function cancer_de_mama_homem()
    {
        return view('template/header/header')
            . view('template/pages/blog/cancer-de-mama-homem')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function emocionais_infertilidade()
    {
        return view('template/header/header')
            . view('template/pages/blog/emocionais-infertilidade')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function cancer_e_infertilidade()
    {
        return view('template/header/header')
            . view('template/pages/blog/cancer-e-infertilidade')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function coparentalidade()
    {
        return view('template/header/header')
            . view('template/pages/blog/coparentalidade')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function endometriose()
    {
        return view('template/header/header')
            . view('template/pages/blog/endometriose')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function preparar_fiv()
    {
        return view('template/header/header')
            . view('template/pages/blog/preparar-fiv')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function sorodiscordantes()
    {
        return view('template/header/header')
            . view('template/pages/blog/sorodiscordantes')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function adenomiose()
    {
        return view('template/header/header')
            . view('template/pages/blog/adenomiose')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function parentalidade()
    {
        return view('template/header/header')
            . view('template/pages/blog/parentalidade')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function sem_trompas()
    {
        return view('template/header/header')
            . view('template/pages/blog/sem-trompas')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function casal_durante_tratamento()
    {
        return view('template/header/header')
            . view('template/pages/blog/casal-durante-tratamento')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function mioma()
    {
        return view('template/header/header')
            . view('template/pages/blog/mioma')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function desejo_ter_filho()
    {
        return view('template/header/header')
            . view('template/pages/blog/desejo-ter-filho')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function psicologia_reproducao()
    {
        return view('template/header/header')
            . view('template/pages/blog/psicologia_reproducao')
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function ansiedade_e_gravidez()
    {
        $data = [
            'title'     => 'Ansiedade e gravidez',
            'description'   => '<div class="post-teaser">
            <p>Este é um tema difícil de discutir, até por que toda tentante já deve ter ouvido:<br>
     “É só relaxar/esquecer que você engravida.”</p>
     <p>E sabemos que não é assim, aqui estamos para falar sobre o impacto da ansiedade em um todo, não que seja um botão que você aperta e pronto, acabou com a ansiedade.</p>
     <p>Então, vamos lá:<br>
     A ansiedade pode deixar o indivíduo impaciente, nervoso e trazer diversas dificuldades para o dia a dia, como para dormir, se concentrar, “se desligar”, inclusive pode trazer sintomas depressivos. Sintomas físicos também podem surgir, como enjoo e vômitos, tonturas, falta de ar, dores no peito, náuseas, tensões musculares, entre outros.</p>
     <p>Portanto, na hora de engravidar a ansiedade pode atrapalhar sim, devido esses sintomas físicos que causam um desequilíbrio hormonal no corpo da mulher, podendo ocasionar alterações e irregularidades nos ciclos menstruais e até mesmo inibição da ovulação.</p>
     <p>Os homens também podem sofrer com a pressão para a gravidez, inseguranças e incertezas. A ansiedade pode causar desequilíbrios hormonais, entre outros.<br>
     Tudo isso são complicações físicas, mas todas geradas por fatores psicológicos. Portanto, o melhor e mais efetivo tratamento é para a mente, com a ajuda do psicólogo na psicoterapia.</p>
     <p>“A ansiedade não tira o problema de amanhã, ela só tira a paz de hoje”</p>',
            'foto'   => 'ansiedade-e-gravidez.png',
        ];

        return view('template/header/header')
            . view('template/pages/blog/page-blog', $data)
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function procedimento_ia()
    {
        $data = [
            'title'     => 'Como funciona o procedimento de Inseminação Artificial?',
            'description'   => "<div class='post-teaser'>
            <p>A técnica de inseminação artificial é um procedimento de reprodução assistida de baixa complexidade, que funciona da seguinte forma: O sêmen é introduzido no útero da paciente, durante seu período fértil, mas anteriormente é feito um preparo no laboratório.</p>
     <p>A paciente passa por um tratamento de estimulação ovariana, com o objetivo de aumentar o número de óvulos liberados, e o esperma passar por processo seminal, para selecionar os melhores espermatozoides para serem utilizados no tratamento.</p>
     <p>Se o sêmen for do parceiro ou de um doador anônimo, a inseminação artificial é classificada de duas formas:</p>
     <p><strong>Inseminação Artificial Homóloga</strong></p>
     <p>Também conhecida de intraconjugal, a inseminação artificial homóloga é quando a paciente utiliza o sêmen do esposo ou companheiro.</p>
     <p><strong>Inseminação Artificial Heteróloga</strong></p>
     <p>Já a inseminação artificial heteróloga é quando a paciente utiliza o sêmen de um doador. Essa prática é mais utilizada por mulheres solteiras ou casais homossexuais femininos.</p>
     <p>Quando a infertilidade é de fator masculino, o casal pode recorrer ao banco de doações de sêmen, através da doação de espermatozoides será possível a realização dos tratamentos de reprodução assistida como a inseminação artificial e Fertilização In Vitro</p>
     <p>A doação de sêmen é indicada para:</p>
     <ul>
     <li>Homens que possuem ausência total de espermatozoides no sêmen ejaculado (azoospermia).</li>
     <li>Pacientes que teve a sua fertilidade comprometida após procedimento cirúrgico ou oncológico (quimioterapia).</li>
     <li>Gestação independente – mulheres que desejam ser mães solteiras, podem solicitar a doação de sêmen para engravidar sem a necessidade de um parceiro.</li>
     <li>Casais homoafetivos femininos</li>
     </ul>
     <p>No Brasil, os bancos de sêmen para doação encontram-se em clínicas particulares e hospitais.</p>",
            'foto'   => 'procedimento-ia.png',
        ];

        return view('template/header/header')
            . view('template/pages/blog/page-blog', $data)
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function gestacao_compartilhada()
    {
        $data = [
            'title'     => 'Como funciona o procedimento de Inseminação Artificial?',
            'description'   => "<div class='post-teaser'>
            <p>A técnica de inseminação artificial é um procedimento de reprodução assistida de baixa complexidade, que funciona da seguinte forma: O sêmen é introduzido no útero da paciente, durante seu período fértil, mas anteriormente é feito um preparo no laboratório.</p>
     <p>A paciente passa por um tratamento de estimulação ovariana, com o objetivo de aumentar o número de óvulos liberados, e o esperma passar por processo seminal, para selecionar os melhores espermatozoides para serem utilizados no tratamento.</p>
     <p>Se o sêmen for do parceiro ou de um doador anônimo, a inseminação artificial é classificada de duas formas:</p>
     <p><strong>Inseminação Artificial Homóloga</strong></p>
     <p>Também conhecida de intraconjugal, a inseminação artificial homóloga é quando a paciente utiliza o sêmen do esposo ou companheiro.</p>
     <p><strong>Inseminação Artificial Heteróloga</strong></p>
     <p>Já a inseminação artificial heteróloga é quando a paciente utiliza o sêmen de um doador. Essa prática é mais utilizada por mulheres solteiras ou casais homossexuais femininos.</p>
     <p>Quando a infertilidade é de fator masculino, o casal pode recorrer ao banco de doações de sêmen, através da doação de espermatozoides será possível a realização dos tratamentos de reprodução assistida como a inseminação artificial e Fertilização In Vitro</p>
     <p>A doação de sêmen é indicada para:</p>
     <ul>
     <li>Homens que possuem ausência total de espermatozoides no sêmen ejaculado (azoospermia).</li>
     <li>Pacientes que teve a sua fertilidade comprometida após procedimento cirúrgico ou oncológico (quimioterapia).</li>
     <li>Gestação independente – mulheres que desejam ser mães solteiras, podem solicitar a doação de sêmen para engravidar sem a necessidade de um parceiro.</li>
     <li>Casais homoafetivos femininos</li>
     </ul>
     <p>No Brasil, os bancos de sêmen para doação encontram-se em clínicas particulares e hospitais.</p>",
            'foto'   => 'gestacao-compartilhada.png',
        ];

        return view('template/header/header')
            . view('template/pages/blog/page-blog', $data)
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function preservacao_fertilidade_feminina()
    {
        $data = [
            'title'     => 'Preservação da Fertilidade Feminina',
            'foto'   => 'preservacao-fertilidade-feminina.png',
            'description'   => '<div class="post-teaser">,
            <p>Devido as mudanças na sociedade, muitas mulheres tem priorizado outras áreas de sua vida, como a vida profissional, a independência financeira e acabam postergando o sonho da maternidade. E para essas mulheres, existe uma alternativa segura para engravidar no futuro. Estamos falando do congelamento de óvulos.</p>
     <p>O procedimento de congelamento de óvulos serve para preservar o maior nível de fertilidade presente nos gametas femininos mais jovens.</p>
     <p>Permitindo um planejamento para a mulher, escolher o momento ideal para se tornar mãe.</p>
     <p>&nbsp;</p>
     <p><strong>Como ocorre o congelamento de óvulos?&nbsp;</strong></p>
     <p>Para ocorrer o congelamento é necessário que óvulos sejam captados da paciente e sejam colocados em nitrogênio líquido, onde ficam armazenados e congelados numa temperatura de -196º C negativos.</p>
     <p>Essa técnica existe há mais de trinta anos, porém, se tornou mais popular há menos de vinte anos, devido ao avanço da ciência a vitrificação evita a perda de óvulos congelados, reduzindo para apenas 5%.</p>
     <p>&nbsp;</p>
     <p><strong>Qual é a idade ideal para realizar o congelamento? </strong></p>
     <p>Não existe uma idade “padrão”, é possível realizar o congelamento enquanto os óvulos tiverem qualidade e quantidade. Entretanto quanto mais jovem a mulher for, mais qualidade terão os óvulos e haverá mais possibilidades para uma gravidez futura.</p>
     <p>Recomenda-se que o procedimento seja feito até os 35 anos, a partir dessa idade os óvulos começam ter uma perda significativa na qualidade e quantidade.</p>
     <p>A mulher já nasce com 7 milhões de óvulos, sendo que esse valor é drasticamente reduzido para 500 mil quando acontece a primeira menstruação. A mulher quando chega a idade de 42 anos, seus óvulos ficam abaixo de 25 mil.</p>
     <p>Fatores externos influenciam bastante na qualidade dos óvulos, como a poluição, radiação, medicações e outros.</p>
     <p>&nbsp;</p>
     <p><strong>Como funciona as etapas do congelamento de óvulos? </strong></p>
     <p>Antes de iniciar o tratamento é necessário fazer uma análise através de exames, para verificar se a paciente não terá nenhuma contraindicação ao uso de hormônios. Pois, serão utilizados para estimular os ovários a produzirem todos os óvulos que seriam descartados naturalmente pelo corpo.</p>
     <p>A aplicação dos hormônios se inicia no segundo ou terceiro dia de menstruação e são tomados por em média dez dias.</p>
     <p>No 12º dia de estimulação ovariana, os óvulos serão coletados. Essa coleta é feita através de punção transvaginal guiada por ultrassom e a paciente estará sedada.</p>
     <p>Apesar da sedação o procedimento é simples, dura em torno de 30 minutos.</p>
     <p>Após a coleta os óvulos serão selecionados, ou seja, apenas os maduros e de boa qualidade morfológica serão congelados.</p>
     <p>Depois da seleção, os óvulos serão armazenados na incubadora para finalizar a maturação, o processo dura por volta de duas horas. Dando sequência, serão adicionadas substâncias para que sejam vitrificados. Essa etapa dura por volta de 15 minutos e por último são congelados em nitrogênio líquido a – 196ºC.</p>
     <p>E quando a paciente desejar ser mãe, os óvulos serão descongelados, fertilizados em laboratório, e os embriões formados serão transferidos para o útero. Após o descongelamento a taxa de sobrevivência varia de 85% a 95%</p>
     <p>&nbsp;</p>
     <p><strong>Congelar óvulos me faz ter a garantia que serei mãe? </strong></p>
     <p>Depende. Vai depender com quantos anos a paciente congelou os óvulos, se o congelamento ocorreu antes dos 35 anos e foram conquistados três blastocistos, a paciente terá uma possibilidade bem alta de 80% de conquistar a maternidade.</p>
     <p>Se caso, a paciente realizou o congelamento com 40 anos, mesmo conquistando o mesmo número de blastocistos, as chances serão baixas, cerca de 45%. Por isso indica-se realizar o congelamento o mais cedo possível.</p>
     <p>&nbsp;</p>
     <p><strong>Congelamento de óvulos é indicado para quem? </strong></p>
     <p>O congelamento de óvulos é indicado para mulheres que não desejam ser mãe no momento atual.</p>
     <p>Mulheres que necessitam passar por tratamento oncológico, tendo que se submeter a quimioterapias e radioterapias que podem se tornar um fator de risco para a fertilidade da mulher, podendo afetar a reserva ovariana ou até mesmo a menopausa precoce.</p>
     <p>Outra indicação é para pacientes que precisam passar por cirurgias, como a remoção de ovários, cistos de endometriose ou que precisam se submeter a tratamentos provocados por doenças autoimunes que possam comprometer a reserva ovariana.</p>
     <p>Se você tem dúvidas sobre os procedimentos e deseja um atendimento personalizado, nossa equipe está a disposição para&nbsp; ajudá-lo (a).</p>',
        ];

        return view('template/header/header')
            . view('template/pages/blog/page-blog', $data)
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function adenomiose_infertilidade()
    {
        $data = [
            'title'     => 'Qual é a relação da Adenomiose com a infertilidade?',
            'foto'   => 'adenomiose.jpg',
            'description'   => '<div class="post-teaser">
            <p>A adenomiose é uma doença inflamatória causada por células do tecido que revestem o útero, o endométrio e pode causar infertilidade. O tecido endometrial cresce na parede do útero, causando dores, cólicas fortes e sangramentos extensos.</p>
     <p>Essa doença dificulta a fixação do embrião na parede do útero, podendo causar abortos espontâneos ou falhas na implantação.</p>
     <p>A adenomiose como a endometriose são semelhantes: A diferença é que na endometriose, as células do endométrio podem se deslocar para outros locais como ovários, trompas, abdômen, entre outros, provocando um fluxo maior de sangramentos e cólicas fortes.<br>
     Os sintomas são parecidos nas duas doenças, dor, cólica menstrual forte, dor durante a relação sexual e a possibilidade de infertilidade. A diferença está no fluxo menstrual, na adenomiose o fluxo fica mais extenso.</p>
     <p><strong>Causas e sintomas da Adenomiose</strong></p>
     <p>Essa condição é mais recorrente em mulheres acima de 35 anos e que já engravidaram, podendo se tornar uma causa de infertilidade dependendo do estado em que se encontra mas pode acometer as mulheres jovens e sem filhos também, mulheres que realizaram cirurgia uterina como curetagem e fatores que aumentam os níveis do hormônio estrogênio.</p>
     <p><strong>&nbsp;</strong></p>
     <p><strong>Os principais sintomas são: </strong></p>
     <ul>
     <li>Intenso sangramento menstrual e prolongado;</li>
     <li>Dores de cólicas ou pélvica aguda e acentuada no período menstrual;</li>
     <li>Dor pélvica crônica;</li>
     <li>A adenomiose é assintomática em 35% dos casos.</li>
     </ul>
     <p>&nbsp;</p>
     <p><strong>Qual o tratamento para Adenomiose. </strong></p>
     <p>Recomenda-se procurar um especialista que faça a investigação para diagnosticar a doença, após isso seja feita a devida orientação para controlar a doença. A adenomiose normalmente, é tratada com o uso de contraceptivos hormonais, além de outros medicamentos.</p>
     <p>É importante destacar que muitas mulheres não buscam ajuda de imediato quando passam a sentir os sintomas dessa doença, dificultando ainda mais o processo de engravidar.</p>
     <p>É de suma importância realizar visitas regulares ao ginecologista, evitando futuras surpresas desagradáveis.</p>',
        ];

        return view('template/header/header')
            . view('template/pages/blog/page-blog', $data)
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function mioma_e_infertilidade()
    {
        $data = [
            'title'     => 'Mioma e Infertilidade',
            'foto'   => 'mioma-e-infertilidade.jpg',
            'description'   => '<div class="post-teaser">
            <p class="western"><span style="font-size: medium;"><b>O que é Mioma?</b></span></p>
     <p class="western"><span style="font-size: medium;">O mioma é um tipo de tumor benigno que se forma&nbsp;no tecido muscular do útero e que também pode ser chamado&nbsp;de fibroma&nbsp;ou leiomioma&nbsp;uterino.</span></p>
     <p class="western"><span style="font-size: medium;">É mais comum nas mulheres em idade reprodutiva. Estima-se que 50% das mulheres neste período podem apresentar miomas uterinos. </span></p>
     <p class="western"><span style="font-size: medium;"><b>O que causa o Mioma?</b></span></p>
     <p class="western"><span style="font-size: medium;">Não existe uma causa estabelecida para o surgimento do mioma, no entanto surge quando as células do tecido muscular que formam o útero se multiplicam de forma desordenada, levando ao aparecimento do tumor. É possível que esse proliferação desordenada também esteja relacionada com as alterações hormonais da mulher, isso porque os sintomas costumam aparecer em mulheres adultas e regredir após a menopausa.</span></p>
     <p class="western"><span style="font-size: medium;">Os miomas aparecem com mais frequência em mulheres que não tem filhos, que têm uma alimentação rica em carnes vermelhas e pobres em vegetais, mulheres obesas e as que têm história desta doença na família.</span></p>
     <p class="western"><span style="font-size: medium;"><b>Tipos de mioma</b></span></p>
     <p class="western"><span style="font-size: medium;">A classificação ocorre de acordo com o local em que se desenvolve no útero, sendo os principais:</span></p>
     <ul>
     <li>
     <p class="western"><span style="font-size: medium;"><b>Subseroso</b></span><span style="font-size: medium;">, em que o mioma desenvolve-se na parte mais externa do útero;</span></p>
     </li>
     <li>
     <p class="western"><span style="font-size: medium;"><b>Intramural</b></span><span style="font-size: medium;">, quando surge dentro das paredes do útero;</span></p>
     </li>
     <li>
     <p class="western"><span style="font-size: medium;"><b>Submucoso</b></span><span style="font-size: medium;">, quando desenvolve-se na parte interna, dentro da cavidade do útero.</span></p>
     </li>
     </ul>
     <p class="western"><span style="font-size: medium;">É necessário saber o tipo de mioma para que seja avaliada a gravidade do mioma e a necessidade de iniciar o tratamento. </span></p>
     <p class="western"><span style="font-size: medium;"><b>Principais sintomas</b></span></p>
     <p class="western"><span style="font-size: medium;">O mioma uterino nem sempre apresenta sintomas, no entanto quando o mioma é grande ou quando são verificados vários miomas no útero, é possível que a mulher apresente alguns sintomas como cólicas intensas, dor durante a relação sexual, sintomas de prisão de ventre e período menstrual mais prolongado. </span></p>
     <p class="western"><span style="font-size: medium;">O mioma é detectado através do médico ginecologista por meio de exames de imagem como o ultrassom, a histeroscopia e a&nbsp;histerossalpingografia, que avaliam a cavidade do útero. Mulheres que desejam ser mães, que são portadoras de mioma uterino, devem ter um acompanhamento com ginecologista, para evitar certas complicações como abortos. </span></p>
     <p class="western"><span style="font-size: medium;"><b>Mioma dificulta a gravidez?</b></span></p>
     <p class="western"><span style="font-size: medium;">Existem possibilidades, em que o mioma pode causar infertilidade, isso dependerá do seu tamanho e onde estiver localizado.<br>
     Os miomas submucosos, por exemplo, aumentam as chances de abortamento em repetição. Esse tipo de mioma é menos frequente, fica na região mais interna do útero, junto ao endométrio, podendo causar sangramentos intensos atrapalhando na implantação do óvulo fecundado ou bloqueando o caminho dos espermatozoides até as trompas.<br>
     Às vezes os miomas são tão pequenos que não impedem a gestação e nem aumentam o risco de abortamento ou prejuízo à gestação, pois não atrapalham em absolutamente nada e não provocam sintomas, precisam ficar em observação, para monitorar uma possível evolução do quadro.</span></p>
     <p class="western"><span style="font-size: medium;">O tratamento será definido de acordo com a avaliação do médico, considerando tamanho, número de miomas, gravidade dos sintomas, idade e planos futuros da mulher.</span></p>',
        ];

        return view('template/header/header')
            . view('template/pages/blog/page-blog', $data)
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function oncologicas()
    {
        $data = [
            'title'     => 'Existem possibilidades de gravidez, após o tratamento oncológico?',
            'foto'   => 'oncologicas.jpg',
            'description'   => '<div class="post-teaser">
            <p>Os métodos de tratamento do câncer evoluíram bastante no decorrer dos anos, através dos avanços da ciência e avanços tecnológicos. As formas mais conhecidas de tratamento é a quimioterapia, radiologia e a cirurgia.<br>
     Os tratamentos citados são bastante eficientes em destruir as células cancerosas no organismo, existem possibilidades de surgir alguns efeitos colaterais. Esses efeitos podem ser temporários, ocorrer no período de tratamento ou podem ser permanentes, depende de várias questões.<br>
     Mulheres que passam por isso, e sonham com a maternidade ficam cheias de dúvidas em relação a gravidez, e se fazem a seguinte pergunta: posso engravidar depois do tratamento oncológico? Vamos lá!<br>
     O <strong>primeiro passo</strong> a ser dado é evitar a gravidez no período de tratamento. Independente de qual seja o procedimento que a paciente receberá.<br>
     Até existem meios seguros de aplicar o tratamento durante a gravidez, porém, é mais indicado que a mulher espere para engravidar após o tratamento.<br>
     O tratamento de quimioterapia não pode ser executada nos 3 primeiros meses de gestação, após este período, pode. A radioterapia não pode ser usada em hipótese alguma, a irradiação pode prejudicar o bebê.<br>
     A cirurgia de câncer de mama pode ser realizada normalmente durante a gestação, sem maiores problemas. A cirurgia nos ovários também podem ser realizadas, caso os exames apontem um possível câncer. Em caso de tumor no colo do útero, a cirurgia ocorrerá dependendo do estágio e de cada caso e poderá ser realizada durante ou após a gestação.<br>
     Cada caso tem sua particularidade. Devido a isso recomenda-se engravidar após o tratamento oncológico, é mais seguro para mulher e para futura criança.<br>
     Deve-se pedir o direcionamento do seu oncologista, para o mesmo verificar a melhor opção.</p>
     <p><strong>Efeitos colaterais dos tratamentos em relação à fertilidade</strong><br>
     Não são em todos os casos que ocorrem os efeitos colaterais, que induzem a menopausa, porém, em casos específicos isso pode acontecer. Um exemplo é o câncer no aparelho reprodutor, em determinado casos, podem exigir a remoção cirúrgica do tumor em conjunto com os ovários ou o útero.<br>
     Esse tipo de câncer, acontece raramente em mulheres jovens, que estão em idade fértil. A radioterapia pode ser solicitada em último caso, quando todas as outras alternativas forem descartadas. Dependendo da região a ser tratada, pode ser induzida a menopausa precoce.<br>
     Ressalto que não são todos os tipos de câncer que causam infertilidade, assim como os tratamentos oncológicos utilizados. Como foi relatado, existem alguns casos de indução a menopausa, entretanto a maioria dos tumores podem ser tratados, sem atingir a vida fértil da mulher.<br>
     Existem chances de acontecer a maternidade, após o tratamento oncológico e são bastante satisfatórias.<br>
     Caso ocorra a menopausa precoce, devido ao tratamento oncológico.<br>
     Se caso isso aconteça, existem outras possibilidades para a realização do sonho de ser mãe. Utilizando as técnicas de fertilização in vitro.<br>
     Antes de dar início no tratamento oncológico, os óvulos podem ser captados através de procedimento cirúrgico e preservados, fecundados ou não. Os fecundados se chamam embriões, e podem, inclusive, serem implantados no útero da mulher que retirou os ovários após o tratamento.<br>
     Os não fecundados também podem ser utilizados em procedimentos posteriores, sendo fecundados e implantados no útero.<br>
     Portanto, é possível engravidar depois do tratamento oncológico e ter uma gestação saudável.<br>
     Em caso de quimioterapia, é possível engravidar após o tratamento normalmente. Entretanto é necessário consultar o médico para verificar as condições e chances de fertilidade.</p>',
        ];

        return view('template/header/header')
            . view('template/pages/blog/page-blog', $data)
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function infertilidade_1()
    {
        $data = [
            'title'     => 'Infertilidade',
            'foto'   => 'infertilidade-1.jpg',
            'description'   => '<div class="post-teaser">
            <p>Podemos identificar a infertilidade após um ano de tentativas, quando o casal não consegue engravidar naturalmente. Após este período é necessário que o casal busque ajuda de um especialista em reprodução humana assistida que irá solicitar uma série de exames para identificar a causa da infertilidade. Mulheres com mais de 35 anos, recomenda-se consultar um especialista após 6 meses de tentativas.<br>
     As principais causas de infertilidade nas mulheres, são:</p>
     <p><ul><li> Idade avançada.<br></li>
     <li> Fator tubo-peritoneal: quando as trompas de Falópio sofrem algum tipo de lesão.<br></li>
     <li> Endometriose: quando o tecido uterino se encontra fora do útero.<br></li>
     <li> Diminuição da reserva ovariana<br></li>
     <li> Menopausa precoce<br></li>
     <li> Fator ovulatório<br></li>
     <li> Infertilidade sem causa aparente</p></li></ul>
     <p>As principais causas de infertilidade nos homens, são:<br>
     <ul><li>Varicocele</li><br>
     <li>Vasectomia</li><br>
     <li>Infecções</li><br>
     <li>Alterações Genéticas</li><br>
     <li>Fragmentação do DNA Seminal</li></p><ul>
     <p><strong>No fator feminino:<br>
     Em relação a idade</strong><br>
     Do ponto de vista biológico, a melhor idade para ter filhos está entre os vinte e cinco e os trinta anos de idade. Mas, ocorreram transformações na sociedade, os casais decidem ter filhos mais tarde, priorizam carreira, estudos para alcançar a estabilidade. No entanto, a partir dos trinta e cinco anos, a fertilidade feminina começa a cair gradativamente e, a partir dos 45, a possibilidade de engravidar de forma espontânea é rara.</p>
     <p><strong>Fator tubo-peritoneal</strong><br>
     O fator tubário abrange cerca de 25 % dos casos de esterilidade feminina, ou seja, a uma alteração nas trompas de Falópio. Quando não há nenhum tipo de problema, as trompas recolhem o óvulo liberado na ovulação, transferindo os espermatozoides até o óvulo e conduzindo o óvulo já fertilizado ao útero. O problema em uma das trompas, devido a uma aderência, ou total, por obstrução tubária, impossibilita este transporte e, como resultado, não acontece a fecundação.<br>
     O dano tubário pode produzir-se devido a:<br>
    <ul><li> Infecções que ascendem desde o colo uterino ou útero às trompas (Doença Inflamatória Pélvica, EIP) ou pela continuidade a partir da cavidade abdominal (apendicite). Os micróbios mais frequentemente implicados na EIP são a Gonorreia, a Clamídia, entre outros.<br></li>
    <li> Cirurgia pélvica anterior que tenha produzido fenômenos de aderências ao nível tubário, ou a endometriose.<br></li></ul>
     O fator tubário pode gerar a gravidez ectópica, que acontece quando o embrião não chega à cavidade uterina, por alterações no diâmetro e na parte interna da trompa, impedindo o seu transporte adequado.</p>
     <p><strong>Endometriose</strong><br>
     É o tecido que reveste o útero no seu interior, e que se descama todos os meses com a menstruação.<br>
     O primeiro passo para diagnosticar esta doença, é através do exame ginecológico, que pode ser confirmado pelos seguintes exames laboratoriais e de imagem: ultrassom transvaginal com preparo intestinal, laparoscopia, ressonância magnética, colonoscopia e um exame de sangue chamado CA-125, que se altera nos casos mais avançados da doença. O diagnóstico de certeza, porém, depende da realização da biópsia.<br>
     <strong><br>
     Fator Ovulatório</strong><br>
     A causa mais frequente da infertilidade é ocasionada pela Síndrome dos Ovários Policísticos (SOP), que atinge cerca de 10% das mulheres em idade reprodutiva. A&nbsp;SOP&nbsp;é caracterizada por um distúrbio hormonal que interfere no processo de ovulação levando a formação de cistos. Os cistos fazem parte do processo de funcionamento dos ovários, que a cada ciclo menstrual desaparecem. Já em mulheres que possuem a SOP os cistos permanecem e modificam a estrutura ovariana, podendo aumentar sua largura em até três vezes do que o tamanho normal. Mulheres que têm essa síndrome, produzem hormônio masculino (androgênios) em excesso, aparecimento de acne, menstruação irregular, intervalos longos entre os ciclos menstruais, podendo até ficar meses sem menstruar. Essa síndrome, trata-se de um distúrbio que tem início na puberdade e vai aumentando progressivamente.<br>
     <strong><br>
     Infertilidade sem causa aparente</strong><br>
     A&nbsp;Infertilidade&nbsp;Sem Causa Aparente, também conhecida como ISCA, acontece quando o casal não engravida e não tem uma explicação mais conclusiva. Nesse caso, depois de diversos exames e tentativas que apontam que o casal não tem nenhum tipo de alteração fisiológica.<br>
     É importante buscar ajuda de um especialista em Reprodução Assistida, após um certo período de tentativas de gravidez, sem uso de preservativos. A avaliação do homem é por meio da análise de sêmen, espermograma. Na mulher, a detecção da infertilidade pode ser realizada por meio do exame chamado Laparoscopia.</p>
     <p><strong>No fator masculino:<br>
     Varicocele:</strong> É uma das principais causas de dificuldade na produção de um sêmen de qualidade, isso ocorre devido a dilatação das veias na região escrotal, aumentando a temperatura testicular e o acúmulo de substâncias tóxicas nessa região. Essa condição pode diminuir a produção de espermatozoides em alguns homens, causando infertilidade. Cerca de 20% dos homens são acometidos pela varicocele, mas nem todos apresentam problemas reprodutivos, por isso, assim que diagnosticada, o paciente deve realizar um espermograma para avaliar se a varicocele está alterando sua capacidade reprodutiva.<br>
     <strong><br>
     Vasectomia: </strong>O procedimento da cirurgia de vasectomia, interrompe o ducto deferente, que é responsável pela passagem dos espermatozoides entre o epidídimo e a uretra, causando a infertilidade.</p>
     <p><strong>Alterações Hormonais:</strong> algumas doenças e medicações de origem hormonal, como anabolizantes, alteram o complexo hormonal masculino, o que afeta a produção adequada do sêmen e resulta na infertilidade.</p>
     <p><strong>Infecções: </strong>Processos inflamatórios advindos de infecções prejudicam as células testiculares, responsáveis pela produção do sêmen e isso diminui significativamente a produção de sêmen. Tais infecções também podem causar diminuição da mobilidade dos espermatozoides, outro fator de infertilidade masculina muito recorrente, já que a motilidade é essencial para os espermatozoides alcancem o óvulo e realizem a fertilização. Em situações mais severas, os processos inflamatórios podem obstruir os epidídimos e ductos deferentes, impedindo a liberação dos espermatozoides.</p>
     <p><strong>Alterações Genéticas: </strong>alguns homens nascem com alterações em seus cromossomos que os levam a uma diminuição severa ou ausência na produção de espermatozoides.<br>
     Fragmentação do DNA Seminal: trata-se de uma condição em que o DNA do sêmen não possui a qualidade necessária para realizar a fertilização. Esta fragmentação pode ser causada pelo acúmulo de radicais livres no espermatozoide e pode ser tratada com medicações antioxidantes.</p>
     <p><strong>Responsável Técnico: Dr. Tosyn Lopes- CRMSP: 172795/ RQE 75109</strong></p>',
        ];

        return view('template/header/header')
            . view('template/pages/blog/page-blog', $data)
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function funcionamento_fiv()
    {
        $data = [
            'title'     => 'Como funciona a Fertilização In Vitro (FIV)?',
            'foto'   => 'funcionamento-fiv.png',
            'description'   => '<div class="post-teaser">
            <p>Provavelmente você já ouviu falar em Fertilização In Vitro (FIV), justamente por se tratar de uma das técnicas de Reprodução Assistida mais realizadas no mundo.</p>
     <h2>A FIV segue 5 passos gerais:</h2>
     <p><ul><li>Monitoramento e estimulação dos óvulos: Nesta fase ocorre a indução da ovulação, através de medicamentos aplicados via injeção subcutânea por cerca de 9 dias. Com esse procedimento, o intuito é obter múltiplos óvulos porque alguns podem não fecundar;</li></p>
     <p><li>Obtenção dos óvulos: Isso é possível através de um procedimento cirúrgico rápido e minimamente invasivo, em que os óvulos são colhidos pela técnica de aspiração folicular;</li></p>
     <p><li>Obtenção dos Espermatozóides: No mesmo dia da coleta dos óvulos, o parceiro masculino deve fazer a coleta de esperma e entregar ao laboratório, que fará a análise e a seleção;</li></p>
     <p><li>Fertilização e Crescimento Precoce do Embrião: Os óvulos são fertilizados via injeção direta para que a fertilização ocorra. Uma vez que o óvulo foi fecundado e as divisões celulares se iniciarem, tem-se o embrião;</li></p>
     <p><li>Transferência dos Embriões para o Útero: 3 ou 5 dias após a obtenção dos óvulos.</li></p>
     <p><li>Exame de sangue BHCG: Por fim, é feita o exame para confirmar se a gravidez ocorreu ou não.</li></ul></p>
     <p>👉Lembre-se de procurar uma Clínica Especializada e de sua confiança para a realização desse procedimento. 💟</p> </div>',
        ];

        return view('template/header/header')
            . view('template/pages/blog/page-blog', $data)
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function endometriose_inferteis()
    {
        $data = [
            'title'     => 'Paciente com endometriose podem se tornar inférteis?',
            'foto'   => 'funcionamento-fiv.png',
            'description'   => '<div class="post-teaser">
            <p>Você sabia que cerca de 10% a 15% das mulheres em idade fértil podem desenvolver Endometriose? E que este percentual equivale a cerca de 6 milhões de brasileiras?</p>
     <p>.Tanto durante o ciclo menstrual, quanto na ausência de uma gestação, o endométrio – tecido que reveste o útero – sofre uma descamação que passa a compor a menstruação. O problema é que ele pode acabar ocupando outras cavidades do corpo além do útero, como por exemplo, o intestino e a bexiga, caracterizando a Endometriose.</p>
     <p>.Entre os sintomas, é bastante comum sentir muita dor durante as cólicas menstruais, já que esse tecido sofre influência dos hormônios sexuais e, ainda, passa por um processo inflamatório.</p>
     <p>Endometriose também pode causar dor na relação sexual principalmente na entrada profunda.<br>
     .Quanto às causas dessa doença, ainda não se sabe ao certo, mas há pesquisas científicas que apontam possíveis falhas no Sistema Imunológico, bem como a ocorrência de uma “menstruação retrógrada”, ou seja, quando o endométrio se desloca para as tubas uterinas ao invés de seguir seu fluxo no período menstrual.</p>
     🤰 Se for diagnosticada de forma tardia, pode causar infertilidade por comprometer as tubas uterinas, além da interferir nos hormônios sexuais e na variação anatômica do útero, impedindo a entrada de espermatozóides e a consequente fecundação.</p>
     ⚠ É preciso lembrar que nem todas as pacientes diagnosticadas com endometriose são inférteis: existem casos em que a quantidade e a qualidade dos óvulos diminuem e, mesmo assim, não inviabilizam a ocorrência de uma gestação.</p>
     <p>Apesar de ser uma doença que não tem cura, existe controle. Após a avaliação, o médico pode prescrever medicações, laparoscopia para retirada dos focos de endometriose, exercícios físicos e dieta equilibrada. Esta decisão será adequada às suas condições de saúde.</p>             </div>',
        ];

        return view('template/header/header')
            . view('template/pages/blog/page-blog', $data)
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function obesidade_fertilidade()
    {
        $data = [
            'title'     => 'A obesidade influência na fertilidade?',
            'foto'   => 'obesidade.jpeg',
            'description'   => '<div class="post-teaser">
            <p>Você sabia que a quantidade de gordura em seu corpo influencia diretamente nas chances de engravidar???</p>
     <p>Pesquisa divulgada recentemente pelo Ministério da Saúde mostra que a taxa de obesidade no país aumentou 67,8% nos últimos treze anos. Entre 2006 e 2018 passou de 11,8% para 19,8%. Nesse mesmo período, o estudo ainda mostra que houve alta do índice em duas faixas etárias em idade reprodutiva: pessoas entre 25 a 34 anos, de 84,2%, e entre 35 a 44 anos, de 81,1%.</p>
     <p>Embora seja mais comum os homens apresentarem excesso de peso, a pesquisa mostrou que as mulheres foram as que mais engordaram, com um aumento de 20,7%, em relação aos homens,18,7%.</p>
     <p>Ainda de acordo com o Ministério da Saúde o índice de obesidade é maior entre as capitais das regiões Norte e Centro-Oeste. A cidade de Manaus aparece como a capital com o maior índice de obesos (23,8%), seguida por Macapá, Campo Grande (23,4%), Cuiabá (22,7%), Porto Velho (22,4%) e Recife (21%). Já as cidades com número mais baixos são Florianópolis (15%), Distrito Federal (15,3%), Teresina (15,7%), Palmas (15,9%) e Belo Horizonte (16,4%).</p>
     <p>Para aferir sua condição de peso, ou melhor de sua massa corporal, é utilizado um índice chamado IMC, índice de massa corpórea. Esse número é resultado de uma divisão do peso pelo quadrado da altura. Para mulheres, se o resultado dessa conta for entre 19,00 e 23,99 é considerado normal, entre 24,00 e 28,99, sobre peso e acima de 29,00, obesidade. Por sua estrutura física diferente, para homens, se o resultado dessa conta for entre 20,00 e 24,99 é considerado normal, entre 25,00 e 29,99, sobre peso e acima de 30,00, obesidade.</p>
     <p>Manter uma massa corporal saudável é um grande aliado da saúde geral, e imprescindível para a saúde reprodutiva. De acordo com a Sociedade Brasileira de Reprodução Assistida (SBRA) a obesidade e o sobrepeso interferem na fertilidade e na ovulação da mulher e por isso recomenda-se que para ter uma gravidez sem risco, as mulheres devem apresentar um Índice de Massa Corpórea (IMC) entre 20 e 25. Se estiver acima dos 30 pode ter complicações na ovulação.</p>
     <p>Nas mulheres a obesidade influência na redução de estradiol (hormônio responsável pelo desenvolvimento dos caracteres sexuais). Esse e outros hormônios, como a progesterona, fazem o controle do ciclo menstrual e influenciam diretamente na condição reprodutiva da mulher. Assim, com a obesidade e as alterações hormonais, as chances de engravidar diminuem.</p>
     <p>O excesso de peso também prejudica a gravidez. A obesidade aumenta o risco de diabetes e pressão alta e pode interferir no tamanho do bebê, que corre o risco de nascer acima do tamanho desejável, com alterações do metabolismo e hipoglicemia.</p>
     <p>O pós-operatório de uma mulher que apresenta obesidade também requer mais cuidados, pois as mulheres obesas têm maior propensão a infecções, &nbsp;feridas e dificuldades de cicatrização.</p>
     <p>Já no homem, a obesidade altera as taxas de hormônios afetando o nível de testosterona e de estradiol, comprometendo a produção de espermatozoides. O excesso de peso influencia ainda na libido e na qualidade de vida, além de prejudicar o ciclo hormonal masculino. O excesso de gordura resulta também em um aumento da temperatura escrotal, que, em última instância, promove a fragmentação do DNA do espermatozoide, podendo gerar falha na fertilização. Todas essas alterações aumentam as chances de aborto, dificultam a gestação natural e interferem na qualidade dos embriões formados por fertilização in vitro (FIV).</p>
     <p>Com relação à FIV, o peso é considerado fator importante na hora de realizar o estímulo ovariano, pois afeta na atuação de vários medicamentos que ajudam no estímulo . Sendo assim, mulheres com obesidade e sobrepeso precisam de quantidade maiores de medicação para obter uma resposta ovariana esperada.</p>
     <p>Se uma paciente não consegue engravidar, mesmo pensando na opção da cirurgia bariátrica, é importante lembrar que algumas pessoas , mesmo após o procedimento, precisam fazer a fertilização in vitro para engravidar. Então, é importante salientar que o número de óvulos recuperados pode ser menor e os embriões tende a ter uma piora na qualidade.</p>
     <p>Embora essa conversa seja sobre obesidade, não podemos deixar de lembrar que mulheres muito magras também podem ter dificuldades para engravidar. A quantidade baixa de gordura no corpo (menos de 17%) inibe a produção de hormônios, o que atrapalha na liberação de óvulos. Em alguns casos o baixo peso também está ligado a outros problemas de saúde, como o hipertireoidismo.</p>
     <p>Outro estudo, intitulado “Origens desenvolvimentistas da saúde e doença” (Developmental origins of health and disease, ou DOHaD) mostra que os hábitos de saúde adotados por nossos pais refletem em nós.</p>
     <p>Pesquisas epidemiológicas e experimentais revelam que os maus hábitos alimentares e a obesidade durante etapas importantes da vida, como gestação e lactação, podem alterar, mesmo que de forma sutil, o desenvolvimento do bebê, elevando o risco para doenças na idade adulta. Por isso, muitas futuras mães se preocupam com a saúde quando começam a pensar em gravidez.</p>
     <p>Porém esquecemos que a saúde do homem também é importante. De acordo com o estudo, marcas epigenéticas alteradas no espermatozoide podem ser herdadas pelo bebê e permanecer com ela até a idade adulta. De forma mais clara, essas alterações podem influenciar no funcionamento de diferentes genes interferindo na nossa saúde.</p>
     <p>Sendo assim, devemos começar a pensar em nossos hábitos desde bem cedo e não esquecer que a saúde do papai e tão importante quanto o da mamãe.</p>
             </div>',
        ];

        return view('template/header/header')
            . view('template/pages/blog/page-blog', $data)
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function gravidez_cancer_de_mama()
    {
        $data = [
            'title'     => 'É possível engravidar após o câncer de mama?',
            'foto'   => 'gravidez-cancer-de-mama.jpg',
            'description'   => '<div class="post-teaser">
            <div align="justify">De acordo com o Instituto Nacional de Câncer (INCA), nos anos de 2018 e 2019 foram diagnosticadas pouco mais de 59 mil mulheres com novos casos de câncer de mama no Brasil, ou seja, uma grande parcela de população feminina está susceptível ao câncer de mama, muitas delas, mulheres que estão tentando engravidar ou que sonham em ser mãe um dia. <p></p>
     <p>A boa notícia é que a a taxa de sobrevivência do câncer de mama é bastante positiva. Ainda de acordo com o INCA, a sobrevivência de mulheres diagnostica com o estágio I é de quase de 100%, no estágio II de aproximadamente 93% e no estágio III de 72%.<br>
     Além da boa taxa de sobrevivência, desde que o diagnóstico seja feito precocemente, a notícias para aquelas mulheres que desejam engravidar também são bastante positivas. Muitas mulheres que vencem o câncer de mama conseguiram engravidar naturalmente.<br>
     No entanto, o tratamento deste e de qualquer outra câncer é bastante agressivo e pode dificultar a gravidez. A radioterapia e a quimioterapia agem diretamente nos ovários da mulher, podem destruir os óvulos e até induzir a menopausa deixando a mulher infértil.<br>
     Para evitar esses danos irreversíveis ou até mesmo dar uma chance às mulheres que desejam ser mães biológicas, as técnicas de reprodução assistida tem como objetivo principal amenizar esse impacto negativo nesses casos.<br>
     Uma das primeiras opções é a preservação da fertilidade. Nesse processo, logo após o diagnóstico do câncer de mama e antes de começar o tratamento contra o câncer, é aconselhável procurar uma clínica de reprodução humana. O especialista, médico infertileuta junto com o oncologista, determinarão se é possível fazer uma estimulação ovariana com medicamentos para aumentar a quantidade de óvulos disponíveis no ciclo menstrual, já que o corpo da mulher prepara e ovula apenas um oócito ao mês. Se a medicação influenciar no desenvolvimento do câncer de mama, pode-se também optar pelo ciclo natural.<br>
     No processo de preservação da fertilidade, após o ciclo natural ou estimulado com medicação, o médico infertileuta irá extrair os óvulos da mulher, num processo chamado de captação de oócitos em centro cirúrgico especializado, e no laboratório esses óvulos serão congelados. Caso a mulher tenha um parceiro, também existe a opção de congelar os embriões já preparados, ficando pronto para o próximo passo na tentativa de atingir a gravidez.<br>
     Lembrando que a fertilização in vitro deve acontecer sempre com a autorização do oncologista, pois a gravidez altera os hormônios do corpo, podendo favorecer o reaparecimento do câncer. Quanto mais tempo a mulher esperar para engravidar, é melhor.<br>
     Depois do tratamento oncológico, havendo o desejo de engravidar, o médico infertileuta irá programar a transferência do embrião de volta ao útero, com o preparo do endométrio.<br>
     Atingindo a gravidez, a gestação seguirá normalmente, sempre com o acompanhamento médico e um bom pré-natal.<br>
     Após a gestação, a mulher pode amamentar normalmente, se não houver a necessidade de uma mastectomia, ou seja a retirada das mamas, durante o tratamento de combate ao câncer. Pode acontecer também de, durante o tratamento do câncer de mama, a radioterapia lesionar as células que produzem o leite, o que poderá dificultar a amamentação. Já se o câncer de mama for em apenas uma mama, ela poderá usar a mama saudável para amamentar.<br>
     Entretanto, se a mulher continuar tomando medicamentos, o oncologista é quem vai dizer se ela poderá amamentar, pois alguns remédios podem passar para o leite.<br>
     É importante lembrar que o câncer tem um envolvimento familiar, sendo assim os filhos apresentam chances de desenvolver o mesmo tipo de câncer, porém, a amamentação não aumenta esse risco.
     </p></div>
             </div>',
        ];

        return view('template/header/header')
            . view('template/pages/blog/page-blog', $data)
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function fertilidade()
    {
        $data = [
            'title'     => 'Como funciona um tratamento de fertilidade?',
            'foto'   => 'fertilidade.jpg',
            'description'   => '<div class="post-teaser">
            <p align="justify">Depois de feitos os exames e o diagnóstico estabelecido, o médico pode indicar dois tipos de tratamento, os tratamentos de baixa e alta complexidade.<br>
     Os tratamentos de baixa complexidade são o coito programado, no qual o médico acompanhará o ciclo menstrual da mulher e indicará o melhor momento para a relação sexual, e a inseminação intrauterina, no qual o médico também acompanhará o ciclo menstrual e no momento da inseminação, irá inserir o sêmen processado diretamente no útero. Ambos os procedimentos podem ocorrer ao natural ou serem induzidos por medicação.<br>
     Os tratamentos de alta complexidades, são mais onerosos, pois ambos podem envolver a indução com medicamentos e assistência cirúrgica e laboratorial. Em ambos, o ciclo menstrual é acompanhado por ultrassonografia e usualmente suportados por medicamentos, a ovulação também é estimulada por medicamentos e os óvulos, ou oócitos são captados cirurgicamente. Nesse momento, os gametas masculino e feminino, ou seja, os oócitos e os espermatozoides são levados ao laboratório, onde pode ocorrer a fecundação naturalmente em um ambiente bastante semelhante ao organismo da mulher, a chamada fertilização in vitro ou FIV, ou os espermatozoides são artificialmente inseridos nos óvulos por um embriologista. Este último processo é o mais complexo e é chamado de ICSI ou inseminação intracitoplasmática do espermatozoide. Após a fertilização, o embrião é transferido de volta para o útero depois de 3 a 5 dias, onde pode se desenvolver naturalmente.</p><p></p>
             </div>',
        ];

        return view('template/header/header')
            . view('template/pages/blog/page-blog', $data)
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function infertil()
    {
        $data = [
            'title'     => 'Quais exames fazer para saber se sou infértil?',
            'foto'   => 'infertil.jpg',
            'description'   => '<p align="justify">Para saber quais exames são necessários para seu diagnóstico, é fundamental consultar um médico especialista, no caso um infertileuta.<br>
            No entanto, de maneira geral, são necessários os exames clínicos feitos pelo médico, as dosagens dos hormônios sexuais, para as mulheres, um exame ultrassonográfico, e para os homens, o exame de espermograma ou análise seminal.</p>',
        ];

        return view('template/header/header')
            . view('template/pages/blog/page-blog', $data)
            . view('template/pages/blog/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
}
