(function() {
	tinymce.create('tinymce.plugins.deflistPlugin', {

		init : function(ed, url) {
			ed.addCommand('mcedeflist', function() {
                ed.windowManager.open({
					file : url + '/panel.php',
					width : 600,
					height : 400,
					inline : 1,
					resizable: 1,
					maximizable : 1
				}, {
					plugin_url : url
                });
			});

			ed.addButton('deflist', {
				title : 'Definition List',
				cmd : 'mcedeflist',
				image : url + '/button.gif'
			});
		},

		createControl : function(n, cm) {
			return null;
		},

		getInfo : function() {
			return {
				longname : 'Definition List Button',
				author : 'Nick (Jedait@mail.ru)',
				authorurl : 'http://cirux.ru',
				infourl : 'http://wordpress.org/extend/plugins/definition-list',
				version : '1.0'
			};
		}
	});

	tinymce.PluginManager.add('deflist', tinymce.plugins.deflistPlugin);
})();
