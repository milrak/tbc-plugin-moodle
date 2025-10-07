# Plugin de Autenticação de TOTOVS RM com Moodle

Este projeto é um plugin para Moodle que permite a autenticação de usuários através do **[TOTVS Business Connect (TBC)](https://centraldeatendimento.totvs.com/hc/pt-br/articles/360058761593-Cross-Segmentos-Backoffice-RM-Integra%C3%A7%C3%A3o-API-Como-s%C3%A3o-utilizados-as-Autentica%C3%A7%C3%B5es-Basic-e-Bearer-Token)** ou através do **[GetKeySession](https://tdn.totvs.com/pages/releaseview.action?pageId=284880256)**, integrando diretamente a plataforma educacional **Moodle** com o ecossistema **TOTVS RM Educacional**.

Com ele, é possível realizar **Single Sign-On (SSO)** de forma segura e automatizada, sem necessidade de integrações complexas adicionais.

## ✨ Funcionalidades
- 🔐 Autenticação de usuários via **TOTVS Business Connect (TBC)** utilizando a tela de login padrão do Moodle.
- 🔐 Autenticação de usuários via **GetKeySession** utilizando URL's Externas do Portal Educacional.
- 🔄 Integração direta com **TOTVS RM Educacional**
- 🔑 Suporte a **Single Sign-On (SSO)**
- ⚙️ Configuração simples e rápida no painel do Moodle
- 📚 Ideal para instituições que utilizam **TOTVS RM** e desejam conectar-se ao **Moodle**

## 🚀 Instalação

1. Baixe ou clone este repositório na pasta `auth/` do seu Moodle:
   ```bash
   git clone https://github.com/milrak/tbc-plugin-moodle.git auth/rm
2. Acesse a administração do Moodle e conclua a instalação do plugin.
3. Configure as credenciais do TOTVS Business Connect no painel de configurações.
4. Configure se será possível autenticar via token do portal educacional.

## 🧰 Requisitos do Sistema

Para utilizar este plugin de integração do **RM** com o **Moodle**, é necessário ter o ambiente configurado com as versões mínimas abaixo:

- 🧑‍💻 **Moodle:** versão **4.1** ou superior  
- 🏢 **Biblioteca RM TOTVS:** versão **12.1.2310.137** ou superior

Essas versões garantem compatibilidade total com as APIs do **TOTVS RM Educacional** e com os métodos de autenticação do **TBC**, assegurando que o **SSO** funcione corretamente.

## 📚 Documentação e Suporte

Precisa de ajuda ou quer acompanhar o desenvolvimento deste plugin de integração entre **RM** e **Moodle**?

- Consulte e participe das discussões abertas na página de **[Issues do projeto no GitHub](https://github.com/milrak/tbc-plugin-moodle/issues)**.
- Relate bugs, sugira melhorias ou peça novas funcionalidades relacionadas à **integração TBC + Moodle** diretamente por lá.

💡 Dica: antes de abrir uma nova issue, verifique se sua dúvida já foi discutida anteriormente.

## Material de Referência

- [Development:Plugin de Autenticação](https://docs.moodle.org/all/pt_br/Development:Plugin_de_Autentica%C3%A7%C3%A3o)
- [Integração - API - Como são utilizados as Autenticações Basic e Bearer Token](https://centraldeatendimento.totvs.com/hc/pt-br/articles/360058761593-Cross-Segmentos-Backoffice-RM-Integra%C3%A7%C3%A3o-API-Como-s%C3%A3o-utilizados-as-Autentica%C3%A7%C3%B5es-Basic-e-Bearer-Token)
- [GetKeySession - Customização Externa](https://tdn.totvs.com/pages/releaseview.action?pageId=284880256)



