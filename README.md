 ##WordPress for SAE是什么?
一个博客程序

向所有的博客程序致敬

##WordPress for SAE有哪些功能？

好久没有写点博客应该有的东西了。虽然我的本意是开一个软件分享博客，但是我舍不得独立出一个网站写自己的心路历程，第一是我没有时间，第二是增加了维护成本。
还记得，去年12月份吗？我那时在准备备案，服务器放在新网，但是这一年网站经历了太多的事，网站也几经改版。
我考虑网站接下来的路时，我不得不再次调整思路，我们是个小网站，只给自己看。
在这一年，网站经历了被别人攻击，版面几经改版，更换网站程序，又换回网站程序，虽然也许在你们看来微不足道，但是在这下面，我的确做了比较多的努力…
作为一个伪极客，我对于许多东西的追求是不变的，我讨厌网站一成不变，这样的东西很俗套，但是冒然创新，不见得是什么好事。
原谅我没办法和别的博主相比那么牛。随随便便几篇文章就能赶上我网站一年的浏览量，但是我依然会竭尽全力把网站维护上去，因为我最后悔的一件事之一就是当初放弃了cyqsd.com。
最近网站的变化可能大家没有觉得，其实是我已经将网站的服务器迁移到了新浪SAE，网站程序依旧是熟悉的WordPress，如果大家用过就会知道。
SAE是对WordPress这类应用兼容不好的，主要就是某些函数方面的限制，事实上也不是什么大问题，只是偶尔有些麻烦的地方，我还记得在SAE和BAE刚刚出来的时候，有许多的朋友也移植了WordPress到这类云服务器，但是，显然，WordPress属于开源软件，经常更新那是肯定的，很多朋友，出于时间原因，无法继续维护，而网络下载的版本不得不考虑有没有被恶意修改的因素，于是乎，我觉得应该做点什么能够帮助大家的事情，我决定在每一个WordPress版本推出时，第一时间为大家推送WordPress on SAE。
还是说说我的思路，鉴于网上已经有许多现成的技术，事实上解决Wordpress本身在sae的运行没有什么大问题，就是数据库读取的问题，比较烦人的问题是，SAE的mysql请求次数比较贵，如果网站不开伪静态，豆子很难支撑。所以需要部分插件的支持。
所以接下来，既是为了自己的需求，也是为了方便大家，我会适配Wordpress到新浪SAE，并且不收费，完整开放代码给大家。


##更新日志：
2015年12月13日：
1.更新WordPress到英文版4.4
2.加入中文语言包
3.加入robots.txt
4.加入saekv.php(SAE KVDB管理面板)
5.加入修改版cos-html-cache，使用KVDB

2015年12月20日：
1.更新WordPress到中文版4.4


##使用方法：
见Github



##有问题反馈
在使用中有任何问题，欢迎反馈给我，可以用以下联系方式跟我交流

* 邮件(root#cyqsd.cn, 把#换成@)
* QQ: 1033453793
* weibo: [@IT训练营](http://weibo.com/cyqsd)
* twitter: [@cyqsd](http://twitter.com/cyqsd)

##捐助开发者
在兴趣的驱动下,写一个`免费`的东西，有欣喜，也还有汗水，希望你喜欢我的作品，同时也能支持一下。
当然，有钱捧个钱场（右上角的爱心标志，支持支付宝和PayPal捐助），没钱捧个人场，谢谢各位。


##关于作者

    Name  : "cyqsd",
    site : "http://www.cyqsd.cn"

一个基于PHP和MySql的开源个人博客平台， 程序在GPL Version 2许可下发行，用户可以免费下载使用和修改传播。
请勿用于商业！！！