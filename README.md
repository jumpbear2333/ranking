# ranking
A simple ranking system

# Mind map
![](https://github.com/jumpbear2333/ranking/raw/master/process.jpg)

# Step simulation

## Generate user data

```Php
php generate_user_date.php
```
Then we will get a random list with user name, score and insert time.   
`
[{"username":"X7ACC2Un25","score":"3151","updateTime":"2022-08-14 02:59:17"},{"username":"QAeYClV6PR","score":"18","updateTime":"2022-08-14 00:01:54"},{"username":"sycAULLL47","score":"3416","updateTime":"2022-08-14 06:46:44"},{"username":"jdQ3YkXOX1","score":"5587","updateTime":"2022-08-14 21:30:55"},{"username":"PCW3KlBd7s","score":"6526","updateTime":"2022-08-14 20:58:13"},{"username":"vY5ySDYwiI","score":"5924","updateTime":"2022-08-14 03:35:34"},{"username":"Xo8WpqhwyT","score":"3445","updateTime":"2022-08-14 13:01:23"},{"username":"048S6VUHBA","score":"4423","updateTime":"2022-08-14 14:18:13"},   
...
`   
    
We can check data by
```Bash
cat user_score.list | jq .
```
## Generate Ranking
```Php
php generate_ranking.php
```
Then we will get a ranking list order by score and time.
    
We can check data by
```Bash
cat ranking.list | jq .
```
## Use API
```Php
php generate_user_date.php <username>
```
The result is like    
    
Your score: 9443
Your ranking: 5557

ranking  name         score     
5547     9DuNQN5gp1   9444      
5548     CnvPCq22mS   9444      
5549     Yao3X6WVGS   9444      
5550     OU0qlRIFyQ   9444      
5551     7lLAloqUhp   9444      
5552     nd5BAwl4G7   9443      
5553     P2nlKo0Bhe   9443      
5554     uOvfgIgKHn   9443      
5555     B06Cc5sAlJ   9443      
5556     rpaW17a0Kw   9443      
5557     YlNWdvAAML   9443      
5558     4hAyLi9Iis   9443      
5559     r4Gx24paf5   9442      
5560     QxKrEZ8jzb   9442      
5561     Hr0cuDR5S1   9442      
5562     VkWIHnbhtf   9442      
5563     v9ofsjGp5V   9442      
5564     krumb8Bbw7   9442      
5565     AqjkoEvYYB   9442      
5566     FQx5OzM3Mh   9442 
   
    
If we do not pass in parameters, it will echo full ranking list
## Other

Of course, we can customize the output file or randomly generated string name list, score, etc
```Bash
vim common.php
```
