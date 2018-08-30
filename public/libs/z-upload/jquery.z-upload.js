/*!
 * jQuery ZUpload
 * @name jquery.ZUpload.js
 * @version 1.4.0
 * @date 2016-04-01
 * @author ciaoca
 * @email ciaoca@gmail.com
 * @site https://github.com/ciaoca/ZUpload
 * @license Released under the MIT license
 */

$.fn.ZUpload = function(settings) {
	var html = ModalCommon = modal = img = page_prev = page_next = jump_page = page_number = input_json = '';
	var self = this;
	var settings = settings;
	var url = settings.service;
	callback = settings.callback;
	window.top.page = 1;
	var type = 'picture'
	self.wrap('<div class="z-uploadbox-wrap"><label class="z-uploadbox-box  start-btn limit_'+settings.limit+'"></label></div>');
	var btn = $(self).closest('.z-uploadbox-box'); 
	
	ModalCommon+='<table width="100%" border="0" cellpadding="0" cellspacing="0" class="modal-table-layout">';
	ModalCommon+='<tbody>';
	ModalCommon+='<tr>';
	ModalCommon+='<td class="layout-right-top"><span class="z-uploadbox-tips">'+settings.tip+'</span> <label  class="btn btn-primary z-uploadbox-button">本地上传</label></td>';
	ModalCommon+='</tr>';
	ModalCommon+='<tr>';
	ModalCommon+='<td><div class="z-uploadbox-html"><ul></ul></div></td>';
	ModalCommon+='</tr>';
	ModalCommon+='<tr>';
	ModalCommon+='<td class="layout-right-bottom"><div class="z-uploadbox-check_count fl">最多可选择'+settings.limit+'个，已选择<span class="text-danger">0</span>个</div> <div class="z-uploadbox-pages"><button type="button" class="z-uploadbox-page_prev btn">上一页</button> <input type="text" class="z-uploadbox-page_number input-1"> <button type="button" class="z-uploadbox-page_next btn">下一页</button> <button type="button" class="z-uploadbox-jump_page btn">跳转</button><input type="hidden" class="z-uploadbox-json"></div></td>';
	ModalCommon+='</tr>';
	ModalCommon+='</tbody>';
	ModalCommon+='</table>';
	ModalCommon+='<div class="modal-footer">';
	ModalCommon+='<button type="button" class="btn btn-primary z-uploadbox-submit">确认</button> ';
	ModalCommon+=' <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>';
	ModalCommon+='</div>';
	self.each(function(i) {
		  html+='<a href="javascript:void(0);"></a>';
		  self.after(html);
	});

	btn.click(function(){ 
		var UploadModal = new $.zui.ModalTrigger({title:'请上传文件',custom: ModalCommon,size:'lg'});
		UploadModal.show({shown: function() {
				modal = $('.modal-table-layout');
				modal.closest('.modal-body').css('padding','0')
				page_prev = modal.find('.z-uploadbox-page_prev');
				page_next = modal.find('.z-uploadbox-page_next');
				jump_page = modal.find('.z-uploadbox-jump_page');
				page_number = modal.find('.z-uploadbox-page_number');
				input_json = modal.find('.z-uploadbox-json');
				$.AjaxTpl('picture',1);//默认是图片类型
				page_prev.click(function(){ 	
					$.AjaxTpl(type,page-1);
				});
				page_next.click(function(){ 	
					$.AjaxTpl(type,parseInt(page)+1);
				});
				jump_page.click(function(){ 	
					$.AjaxTpl(type,$(page_number).val());
				});
				
				$('.z-uploadbox-submit').click(function(){ 	
					
						var input_val = JSON.parse('['+$(input_json).val().replace(/@/g, ',')+']');
						var ids = ImgList = '';
						if(settings.default_name) var setDefault = 'tools_default'
						$.each(input_val,function(index, array){
							ImgList+= '<div class="z-uploadbox-box z-uploadbox-item">';
							ImgList+= '<img src="'+array['path']+'" width="auto" height="100%" data-file_id="'+array['id']+'">';
							ImgList+= '<span class="tools '+setDefault+'"><span class="default"></span><span class="delete"></span></span>';
							ImgList+= '</div>';
							ids += array['id'];
							if(index !== input_val.length -1 ) ids += ',' 
						})
						
						var ids_count = ids.split(',').length;
						if(settings.limit == 1){
							//单个限制的时候直接替换，不追加	
							if(ids_count>settings.limit){
								alert('您最多只能选择'+settings.limit+'个,您现在总数已经'+ids_count+'个了'); return false;
							}
							$('input.'+self.attr('class')+'').val(ids);
							btn.closest('.z-uploadbox-wrap').find('.z-uploadbox-item').remove();
							btn.closest('.z-uploadbox-wrap').prepend(ImgList);
							UploadModal.close();
							callback(self);
							return false;
						}
						
						
						var input_obj = $('input.'+self.attr('class')+'').val();
						if(input_obj == 0) {
							var input_count = 0;
						}else{
							var input_count = input_obj.split(',').length
						}
						var all_count = ids_count+input_count;
						if(ids_count + input_count>settings.limit){
							alert('您最多只能选择'+settings.limit+'个,您现在总数已经'+all_count+'个了'); return false;
						}
						if(input_obj && input_obj!=0){
							var ids = input_obj+','+ids;
						}
			
						$('input.'+self.attr('class')+'').val(ids);
						btn.before(ImgList);
						UploadModal.close();
						callback(self);
			})
			
			
			//初始化本地上传
			var limit = parseInt(30);
			var size = 1000;
			var fileType = 'jpg,gif,png';
			var uploader = WebUploader.create({
				swf: 'Uploader.swf',	// swf文件路径
				// 文件接收服务端。
				server: U("Admin/Upload/upload"),
				pick: {
					'id': $('.z-uploadbox-button'),
					'multi': true
				},
				accept: {
					fileNumLimit: limit,
					extensions: fileType,
					mimeTypes: 'image/jpg,image/jpeg,image/png'
				}
				});
					uploader.on('fileQueued', function (file) {
					OpenLoad()
					uploader.upload();
				});
				
				uploader.on('uploadProgress', function( file, percentage ) {
					$('#LoadingBox p').text((percentage*100).toFixed(0)+'%')
				});
				uploader.on('uploadFinished', function(file) {
					uploader.reset();
				}); /*上传失败*/
				uploader.on('error', function(data) {
					if (data == 'Q_EXCEED_SIZE_LIMIT') {
						Alert('文件大小超限' + size / 1024 / 1024 + 'M');
					}
					if (data == 'Q_TYPE_DENIED') {
						Alert('只允许上传' + fileType + '后缀的文件');
					}
				}) /*上传成功*/
				uploader.on('uploadSuccess', function(file, ret) {
					var str = '';
					if (ret.status == 0) {
						Alert(ret.info);
					} else {
						var array = ret.data.file;
						boxhtml = '';
						boxhtml+= '<li class="active_'+array['id']+' ">';
						boxhtml+= '<label class="active"><img src="'+array['path']+'"><input type="checkbox" name="ids[]" value="'+array['id']+'" checked>';
						boxhtml+= '<span>'+array['name']+'</span><span class="box-check"></span></label>';
						boxhtml+= '</li>';

						$('.modal-table-layout  .z-uploadbox-html ul').prepend(boxhtml);
						$.UpdateItem('add','{"id":"'+array['id']+'","path":"'+array['path']+'"}')
					}

					CloseLoad();
				});
				//初始化本地
			}}); 
	  });
	   
	   
	   $.extend({ 
	　　	AjaxTpl:function(type, page){
			  $('.modal-table-layout [data-type]').removeClass('active')
			  $('.modal-table-layout [data-type='+type+']').addClass('active')
			  if(page <= 1){
				   page_prev.prop('disabled',true);
			  }else{
				   page_prev.prop('disabled',false);
			  }
			  OpenLoad();
			  $.post(settings.service,{ type:type ,page:page }).success(function (ret) {
				  var boxhtml = '';
				  if(!ret.list){
					  CloseLoad();
					   $('.modal-table-layout  .z-uploadbox-html ul').html('<div class="text-center">没有文件资源</div>');
					  page_next.prop('disabled',true);
					  return false;
				  }else{
					  page_next.prop('disabled',false);
				  }
				 
				   $.each(ret.list,function(index, array){
					  boxhtml+= '<li class="active_'+array['id']+'">';
					  boxhtml+= '<label><img src="'+array['path']+'"><input type="checkbox" name="ids[]" value="'+array['id']+'">';
					  boxhtml+= '<span>'+array['name']+'</span><span class="box-check"></span></label>';
					  boxhtml+= '</li>';
				  })
				  $('.modal-table-layout  .z-uploadbox-html ul').html(boxhtml);
				  $(page_number).val(ret.page);
				  window.top.page = ret.page;
				 
				  //翻页充值已选
				  $.each(JSON.parse('['+$('.modal-table-layout  .z-uploadbox-json').val().replace(/@/g, ',')+']'),function(index, array){
					  $('.modal-table-layout  .z-uploadbox-html ul li.active_'+array['id']+' label').addClass('active');
				  })
				  CloseLoad();
			  })
		  },UpdateItem:function(type, json){
		
				var input = $('.modal-table-layout .z-uploadbox-json');
				var attachVal = input.val(); 
				var attachArr = attachVal.split('@'); 
				
				var newArr = [];
				for (var i in attachArr) {
					if (attachArr[i] !== '' && attachArr[i] !== json.toString()) {
							newArr.push(attachArr[i]);
					}
				}
				type === 'add' && newArr.push(json);
				input.val(newArr.join('@'));
 
				$('.z-uploadbox-check_count span').text(newArr.length);
				return newArr;
		  } ,DeleteItem:function(delobj, name){
				var wrap = delobj.closest('.z-uploadbox-wrap');
				delobj.closest('.z-uploadbox-item').remove();
				var ids = 0;
				var len = wrap.find('.z-uploadbox-item').length;
				wrap.find('.z-uploadbox-item').each(function(index, array){
					ids+= $(this).find('img').data('file_id');
					if (index != len - 1){
						ids+= ',';
					}
				})
				wrap.find('input[name="'+name+'"]').val(ids);
				callback(self);
		  },SortItem:function(wrap){
			
				var ids = 0;
				var len = wrap.find('.z-uploadbox-item').length;

				wrap.find('.z-uploadbox-item').each(function(index, array){
					ids+= $(this).find('img').data('file_id');
					if (index != len - 1){
						ids+= ',';
					}
				})
				wrap.find('.start-btn input').val(ids);
		  },AjaxValue:function(type, values){
				$.post(settings.service,{type:type, ids:values,initial:true }).success(function (ret) {
						var ids = ImgList = '';
						if(!ret.list) return false;
						if(settings.default_name) var setDefault = 'tools_default'
						$.each(ret.list,function(index, array){
							ImgList+= '<div class="z-uploadbox-box z-uploadbox-item">';
							if(settings.default_value == array['id'])  ImgList+= '<i class="icon-check-circle"></i>';
							ImgList+= '<img src="'+array['path']+'" width="auto" height="100%" data-file_id="'+array['id']+'">';
							ImgList+= '<span class="tools '+setDefault+'"><span class="default"></span><span class="delete"></span></span>';
							ImgList+= '</div>';
							ids += array['id'];
							if(index !== ret.list.length -1 ) ids += ','
						})
						self.closest('.z-uploadbox-wrap').prepend(ImgList);
						callback(self);
				})
		  }
	}); 
	
		
	if(settings.value){
		$.AjaxValue(settings.type, settings.value);
	}

	self.closest('.z-uploadbox-wrap').on('click','.z-uploadbox-item span.delete', function() {

		$.DeleteItem($(this), settings.name);
	})
	
	self.closest('.z-uploadbox-wrap').on('click','.z-uploadbox-item .tools_default .default', function() {
		var obj = $(this);
		obj.closest('.z-uploadbox-wrap').find('.icon-check-circle').remove();
		obj.closest('.z-uploadbox-item').find('img').after('<i class="icon-check-circle"></i>');
		$('input[name="'+settings.default_name+'"]').val(obj.closest('.z-uploadbox-item').find('img').data('file_id'));
	})
	
	 $(document).on('click','.modal-table-layout input[type="checkbox"]',function(){
		 var that = $(this);
		  if(that.is(':checked') == true){
			 that.closest('label').addClass('active');
			 $.UpdateItem('add','{"id":"'+that.val()+'","path":"'+that.closest('label').find('img').attr('src')+'"}')
		  }else{
			  that.closest('label').removeClass('active');
			  $.UpdateItem('delete','{"id":"'+that.val()+'","path":"'+that.closest('label').find('img').attr('src')+'"}')
		  }
	  }); 
	    
	
 };