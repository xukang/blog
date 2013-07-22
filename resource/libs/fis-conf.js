var fs = require('fs');

var cwd = process.cwd();
var namespace = 'libs' + cwd.replace(__dirname,'').replace(/\\/g, '\/');

var pkg = namespace.replace(/\/$/,'').replace(/.+\//,'');

if(fs.existsSync(cwd + '/package.json')){
	var json = fs.readFileSync(cwd + '/package.json');
	if(json){
		json = JSON.parse(json);
	}
	if(json.version){
		namespace = namespace + '/' + json.version;
		pkg  = pkg + '_' + json.version;
	}
}
pkg = pkg + '.js';

var pack = {};
//pack[pkg] = '**.js';

console.log(namespace, pkg);


fis.config.merge({
    namespace: namespace ,
	settings : {
        postprocessor : {
            jswrapper : {
                type : 'amd'
            }
        }
    },
	roadmap : {
		path : [
				{
					reg : /^\/output\/(.*)/i,   
					release : false
				},
				{
					reg : /^\/demo\/(.*)/i,   
					release : false
				},
				{
					reg : /package\.json$/i,
					release : false
				},
				{
					reg : /^\/widget\/(.*\.tpl)$/i,
					isMod : true,
					url : '${namespace}/widget/$1',
					release : '/template/${namespace}/widget/$1'
				},
				{
					reg : /^\/widget\/(.*\.(js|css))$/i,
					isMod : true,
					release : '/static/${namespace}/widget/$1'
				},
				{
					reg : /^\/widget\/(.*)$/i,
					isMod : true,
					release : '/static/${namespace}/widget/$1'
				},
				{
					//所有image目录下的.png，.gif文件
					reg : /^\/(.*)\.(?:png|gif)/i,
					//发布到/static/pic/xxx目录下
					release : '/static/${namespace}/$1'
				},
				{
					//reg : '${namespace}-map.json',
					reg: /-map.json$/,
					release : '/config/${namespace}-map.json'
				},
				{
					reg: /^\/static\/(.*)/i,
					release: '/static/${namespace}/$1'
				},
				{
					reg: /^\/(.*)\.(js|css)$/i,
					isMod: true,
					release: '/static/${namespace}/$1'
				},
				{
					reg : /^\/page\/(.+\.tpl)$/i,
					isMod: true,
					release : '/template/${namespace}/page/$1',
					extras: {
						isPage: true
					}
				}
		]
	},
	pack : pack
	
});
