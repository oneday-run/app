# Command/Chat: (PROCESS : TARGET/SOURCE) -> (ACTION : TARGET/SOURCE : VALUE)

#person.ask: @role.customer
    #create @quote.question: Jakiego typu projekt?
    #create @quote.answer:
    #create @quote.explanation: SDLC, DevOps


#devops.plan: @env.git
        #action.create : @docs.domain
        #action.update : @docs.domain www.plain.com
        #action#create : @docs@name
        #action#update : @docs@name Plain Docu
        #action#create : @docs@version
        #action#update : @docs@version Plain Docu
        #action#create : @docs@description Dokumentacja dla projektu, co ma być wykonane, definicja, rozdzielenie zadań

    #devops.plan #action.create @docs.domain www.plain.com @docs.name Plain Docu

#devops.plan : @env.git
        #action.create: @docs.domain, .name, .version, .description
        #action.update: @docs.domain: www.plain.com, .name: Plain Docu, .version: Plain Docu, .description: Dokumentacja
        #action.update: @docs.description: Dokumentacja dla projektu, co ma być wykonane, definicja, rozdzielenie zadań


#devops#dev
    @env.git
        #action.create @docs.domain ...

#devops#build
    @env@pc

#devops#test
    @env@terminal
    @env@browser

#devops#deploy
    @env@git
    @env@vps #git.clone http://git.org/pro

@env@monitor

@env@cdn

#action#create @project@apka1@dev

----

# APP USER - SELECT SOURCE - INPUT NEW

  @Architect
    SOURCE - VALUE - PROCESS
    ADD TO NET
    IN: @App.Data - @user - #create
    OUT: @App.Data.User (for @Developer)

  @Developer
    SOURCE - PROCESS - VALUE
    DEF CODE FUNCTION IN APIDSL

    IN:
        @App.Data.User apidsl.get("readpdf").letpdf.list("*pdf").letcsv.render()
        [CREATE]
    OUT: @App.Data.User() { apidsl commands: get + run, write sql var  }

    IN: @App.Data.User - apidsl commands: get + run - #read (for @User)
    OUT: @App.Data.User() { apidsl commands: get + run, read sql values }

  @User @App.Data.User #read
    SOURCE - VALUE - PROCESS
    ADD DATA @App.Data - tom - #create

    IN: @App.Data.User - apidsl command - #create
    OUT: @App.Data.User().all()

  @User @App.Data.User #create
    SOURCE - VALUE - PROCESS
    ADD DATA @App.Data - tom - #create

    IN: @App.Data.User - apidsl command - #create
    OUT: @App.Data.User( Tom )

