# GGNotify
Simple GG (Gadu-Gadu) notification bundle for Symfony2 ( boty.gg.pl wrapper )  

Bundle  create  service "poznet.ggnotify.sender"  with method  
`send('msg');`

that  sends  message to admin gg

For xample in controller : 
`$this->get('poznet.ggnotify.sender')->send('my message');`

###Installation 

This bundle is a wrapper  for boty.gg.pl 
To use in=t you need to  have veryfied account on [boty.gg.pl](http://boty.gg.pl)

1. Add Bundle to Kernel
2. Create following parameters in **paramters.yml**:

ggbot_gg:  (Bot GG Number)

ggbot_login: (Bot GG Login) 

ggbot_pass: (Bot GG Password) 

ggbot_admingg: ( Admin GG ) 


###Possible Problems
1. To recive message on admin GG , you need to talk to BOT (Bot GG Number) at least once (from Admin GG).
