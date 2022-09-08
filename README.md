
![1/cover.png](https://onedayrun.github.io/logo/1/cover.png)

# [app.oneday.run](https://app.oneday.run/)

+ [www.oneday.run](https://www.oneday.run/)
+ [docs.oneday.run](https://docs.oneday.run/)
+ [logo.oneday.run](https://logo.oneday.run/)


# app.oneday.run
app.oneday.run - html




OneDay.Run is an open-source distributed event streaming platform used by software houses for high-performance data pipelines, streaming analytics, data integration, and mission-critical applications.



# Providers


# Frelancers



Capabilities Performance

# High Throughput

Deliver aps at network limited throughput using a cluster of machines with low latency.


# Scalable

Scale production clusters up to a thousand brokers, trillions of messages per day, petabytes of data, hundreds of thousands of partitions. Elastically expand and contract storage and processing.

# Permanent storages

Store streams of data safely in a distributed, durable, fault-tolerant cluster.


## High availability

Stretch clusters efficiently over availability zones or connect separate clusters across geographic regions.




ECOSYSTEM

lambda: appfunc.com

marketplace: mvps.dev

 Built-in Stream Processing

Process streams of events with joins, aggregations, filters, transformations, and more, using event-time and exactly-once processing.
Connect To Almost Anything

Kafka’s out-of-the-box Connect interface integrates with hundreds of event sources and event sinks including Postgres, JMS, Elasticsearch, AWS S3, and more.
Client Libraries

Read, write, and process streams of events in a vast array of programming languages.
Large Ecosystem Open Source Tools

Large ecosystem of open source tools: Leverage a vast array of community-driven tooling.




Trust & Ease Of Use


    Mission Critical

    Support mission-critical use cases with guaranteed ordering, zero message loss, and efficient exactly-once processing.
    Trusted By Thousands of Orgs

    Thousands of organizations use Kafka, from internet giants to car manufacturers to stock exchanges. More than 5 million unique lifetime downloads.
    Vast User Community

    Kafka is one of the five most active projects of the Apache Software Foundation, with hundreds of meetups around the world.
    Rich Online Resources

    Rich documentation, online training, guided tutorials, videos, sample projects, Stack Overflow, etc.



Learn about OneDay.Run,
the open source streaming technology
behind some of the most popular real-time, event-driven user experiences on the web, including SaaS, Api, Apps.



DevOps approach creates a situation where the organization releases more valuable software faster (or even on a continual rollout basis). A faster, healthier cycle-time equals more revenue, market share, and competitive advantage, as well as more satisfied and loyal customers and employees.

Stage-ing/env:
    dev
    test
    prod

Template:
Sposob tworzenia w zależności od typu apki i srodowiska
Najpierw kilka wstepnych pytan w chat i dopiero generowanie szkieletu projektu


OneDay.Run

Person
[?] Ask
[i] Explain, Define
[>] Act, work
[!] Observe

Developer
[?] Docs: Readme, Chat
[i] Code: Class, Config
[>] Exec: Run, Deploy, Build Code
[!] Test: Check


Devops
[?] Define
[i] Create, Speak, write
[>] Deploy, Act, do
[!] Monitor, Measure


[?] Observe, watch, measure, monitor
[i] Orient, listen
[!] Decide, speak, write
[>] Act, do

# OODA loop is the cycle observe–orient–decide–act
https://en.wikipedia.org/wiki/OODA_loop
[!] Observe
[?] Orient
[i] Decide
[>] Act

1. Wybierz typ aplikacji [?]
2. Konfiguracja projektu [i]
3. uruchomienie [>]
4. monitorowanie i zgłaszanie do subskrypcji [!]


planer
architect.oneday.run
projects.onedayrun.com
run.onedayrun.com
https://oneday.run/dev

provider
architect
developer
tester

oneday.run/dev
- developerska wersja oneday.run


projects.oneday.run
environment.oneday.run
development.oneday.run
deploy.oneday.run - test
monitor.oneday.run

plan/ - architect, queue

Account
    projects
    marketplace - my apps
    payments
    invoices
    account

Projects
    Projects
    Organisations, OUT, create
    Apps

----



Org Definition: Company Sources: Environment Sources, Company Providers -> Sources
    *Select Definition Template

  Providers Marketplace: services, CREATE
    + api saas
    + library marketplaces
    + dependencies - available libraries for apidsl

  Process: CREATE
    + sale
    + buy

  Sources: data, OUT, create
    Org
        Process
            Providers
                App

      + github code
      + data
      + code
      + people

*Select Definition Template
Environment Network -> Network editor / definition of: organisation and environment
  Org.Providers: services, READ
  Org.Process: services, READ
  Org.Data: services, READ
  Org.*

--------

*Select Definition Template
App Network ->
  App.Data: data,  IN, CREATE
  App.Actions IN, create
  App.Rights IN, create
  App.Account IN, create
  App.Environment = Sources & Actions Network OUT, create


Development - how it works, view data [SOURCE, RIGHTS/COMMANDS]
  Environment IN, read
  Data IN, edit, Sql, CSV, Excel, upload,
  Code IN, edit, Apidsl,
  Scenario OUT, create


Monitor, Deploy/Run - monitoring als Customer/PM
  Scenario - IN, read
  Subscription - IN, edit
  Data - OUT, read





dev
run



library

oneday.run

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


# Event: Operation, Action, Process -> Sources -> action


#quote
    answer
    question
    explanation

#offer
    [?]
    #quote
    [!]
    #requirements
    #design
    [>]
    #installation
    [!]
    #managament

#devops
    [?]
        #quote - chat with person
        #requirements - design expectations
        #define - design product, create docs
    [i]
        #dev - data, code
        #build - packages, code
        #test - code / services
    [>]
        #deploy - services
    [i]
        #monitor - services


Person
    [?] Ask
    [i] Explain
    [>] Act
    [!] Observe

#process
    #buy
    #sell
    #hire
    #fire
    #define
    #support
    #production
    #accountinng
    #humanresources
    #management
    #outsourcing


#action
    #Create
    #Read
    #Update
    #Delete

# Sources: Data, People, Hardware, Software

@payment
    payd
    overdue
    not payd
    cancelled
    refund

@invoice
    proforma
    original
    duplicate


@quote
    question
    answer
    definition
    offer

@project
    @apka@dev
    @apka@test
    @apka@prod

@environment
    @server
    @vps
    @kubernetes
    @docker

@service
    *
    @email

@package
    @app
    @lib
    @framework

@docs
    @www.domain.com

@code
    @github-api/user/project

@data
    @db

@org
    @softreck
    @infreck
    @customer

        @team
            @devs
            @devops
            @hr
            @marketing

                @role - positions
                   @customer
                   @tester
                   @admin
                   @user
                   @manager
                   @devops
                   @dev
                   @cto

                        @person - contacts
                            @tom
                            @softreck




# Subscription: Process/Action -> From[Source] -> To[Source]

@role.pm
    #created @quote.*
    #updated @quote.*

@role@dev
    #action#read @data@db
    #action#update @code@app1
    #action#update @data@db @env@docker

@role@admin
    #action#create @data@db @env@vps

@role@admin
    #action#create

@role@cto
    #process#monitor



---

+ [edit](https://github.com/onedayrun/app.oneday.run/edit/main/README.md)
+ [onedayrun/docs](https://github.com/onedayrun/app.oneday.run)
