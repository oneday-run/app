# data.oneday.run

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

