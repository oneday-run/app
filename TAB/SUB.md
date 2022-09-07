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

