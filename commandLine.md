#Traversal
### Print working directory
    pwd
### Change directory
    cd
### List directory contents
    ls

***

#Sass
###  install the ruby gem for sass
    gem install sass

###  Sass command to monitor style/sass and save output to style/css (monitors directory)
    sass --watch /home/ubuntu/workspace/assets/styles
    
### Sass command to monitor and output in minimum style
    sass --watch /home/ubuntu/workspace/style/sass/:/home/ubuntu/workspace/style/css/ --style compressed
    
### Other output options: 
####Nested: the default Sass style, because it reflects the structure of the CSS styles and the HTML document they’re styling. Each property has its own line, but the indentation isn’t constant. Each rule is indented based on how deeply it’s nested. 
    --style nested
####Expanded is a more typical human-made CSS style, with each property and rule taking up one line. Properties are indented within the rules, but the rules aren’t indented in any special way. 
    --style expanded    
####Compact style takes up less space than Nested or Expanded. It also draws the focus more to the selectors than to their properties. Each CSS rule takes up only one line, with every property defined on that line. Nested rules are placed next to each other with no newline, while separate groups of rules have newlines between them.   
    --style compact
####Compressed style takes up the minimum amount of space possible, having no whitespace except that necessary to separate selectors and a newline at the end of the file. It also includes some other minor compressions, such as choosing the smallest representation for colors. It’s not meant to be human-readable. 
    --style compressed

***
#git
## commands

####Pulls repo from remote repository
    git pull
    
####Makes sure all local files are scheduled to be committed to the local repo    
    git add --all
    
####Displays status of local repo    
    git status
    
####commits changes to the local repo and inserts comment about commit    
    git commit -m "comment"
    
####Pushes local repo to the remote repository    
    git push
 

***

#MySQL
https://docs.c9.io/setting_up_mysql.html
### mySQL command to start database
    mysql-ctl start

#### MySQL 5.5 database added.  Please make note of these credentials:
    Root User: petersalvato
    Database Name: c9
   
### MySQL command to run interactive shell
    mysql-ctl cli

### MySQL command to stop mysql
    mysql-ctl stop

