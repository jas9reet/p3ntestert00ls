
    var chart_config = {
        chart: {
            container: "#collapsable-example",

            animateOnInit: true,
            
            node: {
                collapsable: true,
            },
            animation: {
                nodeAnimation: "easeOutBounce",
                nodeSpeed: 700,
                connectorsAnimation: "bounce",
                connectorsSpeed: 700
            }
        },

        nodeStructure: {
            collapsed: true,
            text:{
                            desc: "Cyber Kill Chain",
                            
                        },
            // image: "img/logo.png",
            childrenDropLevel: 2,
            children: [
              {
                    pseudo: true,
                    childrenDropLevel: 1,
                    children: [
                        {
                            image: "img/1.png",
                            collapsed: true,
                            children: [
                        {
                            link: { href: "/p3ntestert00ls/tool/whois-lookup.php"},
                            text:{
                                    desc: "WHOIS Lookup",
                                  },

                        },

                        {
                            link: { href: "/p3ntestert00ls/tool/url-fuzzer.php"},
                            text:{
                                    
                                    desc: "URL Fuzzer"
                                  },
                                  
                        },

                         {
                            link: { href: "/p3ntestert00ls/tool/subdomain-finder.php"},
                            text:{
                                    
                                    desc: "Subdomain Finder"
                                  },
                                  
                        },  
                         
                    ]
                        },
                         {
                            image: "img/2.png",
                            collapsed: true,
                            children: [
                        {
                            link: { href: "/p3ntestert00ls/tool/url-fuzzer.php"},
                            text:{
                                    
                                    desc: "URL Fuzzer"
                                  },
                                  
                        },

                        {
                            link: { href: "http://www.google.com"},
                            text:{
                                    
                                    desc: "Cyber Kill Chain"
                                  },
                                  
                        },
                         
                    ]


                        },
                    ]
                },
                {
                    // text:{
                    //         name: "Erica Reel",
                    //         title: "Chief Customer Officer"
                    //     },
                    image: "img/3.png",
                    collapsed: true,
                    children: [
                        {                            
                            image: "img/figgs.png",
                            children: [
                                            {
                                                link: { href: "http://www.google.com"},
                                                image: "img/figgs.png"
                                            }
                                        ]
                                    
                        }
                    ]
                },
                {
                    image: "img/4.png",
                    childrenDropLevel: 1,
                    collapsed: true,
                    children: [
                        {
                            image: "img/woodhouse.png"
                        }
                    ]
                },
                 
                {
                    image: "img/5.png",
                    collapsed: true,
                    children: [
                        {
                            image: "img/figgs.png",
                        }
                    ]
                },
                {
                    pseudo: true,
                    childrenDropLevel: 1,
                    children: [
                        {
                            image: "img/6.png",
                        },
                         {
                            image: "img/7.png",
                        },
                    ]
                },
                



               
            ]
        }
    };

/* Array approach
    var config = {
        container: "#collapsable-example",

        animateOnInit: true,
        
        node: {
            collapsable: true
        },
        animation: {
            nodeAnimation: "easeOutBounce",
            nodeSpeed: 700,
            connectorsAnimation: "bounce",
            connectorsSpeed: 700
        }
    },
    malory = {
        image: "img/malory.png"
    },

    lana = {
        parent: malory,
        image: "img/lana.png"
    }

    figgs = {
        parent: lana,
        image: "img/figgs.png"
    }

    sterling = {
        parent: malory,
        childrenDropLevel: 1,
        image: "img/sterling.png"
    },

    woodhouse = {
        parent: sterling,
        image: "img/woodhouse.png"
    },

    pseudo = {
        parent: malory,
        pseudo: true
    },

    cheryl = {
        parent: pseudo,
        image: "img/cheryl.png"
    },

    pam = {
        parent: pseudo,
        image: "img/pam.png"
    },

    chart_config = [config, malory, lana, figgs, sterling, woodhouse, pseudo, pam, cheryl];

*/