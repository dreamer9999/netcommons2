<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:35
         compiled from photoalbum_view_main_slideshow_js.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'photoalbum_view_main_slideshow_js.html', 23, false),)), $this); ?>
<script type="text/javascript">
var clsPhotoalbumSlideshow = Class.create();
clsPhotoalbumSlideshow.prototype = {
	initialize: function() {
		this.mousePosition = [0, 0];
		
		this.hideTimer = null;
		this.hideTimerValue = 2000;
		this.descriptionVisible = true;
		
		this.screenWidth = null;
		this.screenHeight = null;

		this.topAdjustment = 10;
		
		this.opacityRatio = 0.3;
		this.changeOpacityTimerValue = 200;
		
		this.setScreenSize();
	},

	load: function() {
		photoalbumCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].selectPhoto();
		this.moveOperation();
		photoalbumCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].startSlide(<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
);
		
		Event.observe(window, "resize", this.resizeWindow.bind(this), false);
	},

	resizeWindow: function() {
		this.setScreenSize();
		this.moveOperation();
		this.movePhoto();
	},

	setScreenSize: function() {
		this.screenWidth = Position.getWinOuterWidth();
		this.screenHeight = Position.getWinOuterHeight(); 
	},

	moveOperation: function() {
		var operation = $("photoalbum_slideshow_operation");

		var width = Element.getWidth(operation);
		var height = Element.getHeight(operation);
		var left = Math.round((this.screenWidth - width) / 2);
		var top = Math.round(this.screenHeight - height - this.topAdjustment);

		Element.setStyle(operation, {"left":left + "px"});
		Element.setStyle(operation, {"top":top + "px"});
	},

	movePhoto: function(index) {
		if (index == null) {
			var index = photoalbumCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].currentPhotoIndex;
		}

		var width = photoalbumCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].photos[index]["width"];
		var height = photoalbumCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].photos[index]["height"];
		if (this.screenWidth < width) {
			var ratio = this.screenWidth / width;
			photoalbumCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].photos[index]["width"] = this.screenWidth;
			photoalbumCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].photos[index]["height"] = Math.round(height * ratio);
		}
		if (this.screenHeight < height) {
			var ratio = this.screenHeight / height;
			photoalbumCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].photos[index]["width"] = Math.round(width * ratio);
			photoalbumCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].photos[index]["height"] = this.screenHeight;
		}

		var left = 0;
		var top = 0;
		var photoArea = $("photoalbum_photo_area<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
");
		if (photoalbumCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].size_flag) {
			var width = Element.getWidth(photoArea);
			var height = Element.getHeight(photoArea);
			if (this.screenWidth > width) {
				left = Math.round((this.screenWidth - width) / 2);
			}
			if (this.screenHeight > height) {
				top = Math.round((this.screenHeight - height) / 2);
			}
			Element.setStyle(photoArea, {"left":left + "px"});
			Element.setStyle(photoArea, {"top":top + "px"});

			var top = 0;
			if (height > photoalbumCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].photos[index]["height"]) {
				top = Math.round((height - photoalbumCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].photos[index]["height"]) / 2);
			}
			Element.setStyle($("photoalbum_photo<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"), {"top":top + "px"});
		} else {
			var width = photoalbumCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].photos[index]["width"];
			var height = photoalbumCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].photos[index]["height"];
			if (this.screenWidth > width) {
				left = Math.round((this.screenWidth - width) / 2);
			}
			if (this.screenHeight > height) {
				top = Math.round((this.screenHeight - height) / 2);
			}
			Element.setStyle(photoArea, {"left":left + "px"});
			Element.setStyle(photoArea, {"top":top + "px"});
		}
	},

	moveDescription: function() {
		var description = $("photoalbum_slideshow_photo_description");
		if (Element.hasClassName(description, "display-none")) {
			return;
		}

		var width = Element.getWidth(description);
		var operation = $("photoalbum_slideshow_operation");
		var height = Element.getHeight(description);
		var left = Math.round((this.screenWidth - width) / 2);
		var top = valueParseInt(Element.getStyle(operation, "top")) - height - this.topAdjustment;
		Element.setStyle(description, {"left":left + "px"});
		Element.setStyle(description, {"top":top + "px"});
		
		Element.setStyle(description.firstChild, {"height":height + "px"});
	},

	showNonPhoto: function(event) {
		this.mousePosition[0] = Event.pointerX(event);
		this.mousePosition[1] = Event.pointerY(event);
		
		this.startOpacity($("photoalbum_slideshow_operation"), this.opacityRatio);
		this.startOpacity($("photoalbum_slideshow_photo_name"), this.opacityRatio);
		
		clearInterval(this.hideTimer);
		this.hideTimer = null;
		
		this.hideTimer = setInterval(function(){this.hideNonPhoto();}.bind(this), this.hideTimerValue);
	},

	hideNonPhoto: function() {
		var operation = $("photoalbum_slideshow_operation");
		if (Element.hasClassName(operation, "visible-hide")) {
			clearInterval(this.hideTimer);
			this.hideTimer = null;
		}
		
		if (!Position.within(operation, this.mousePosition[0], this.mousePosition[1])) {
			this.startOpacity(operation, this.opacityRatio * -1);
			this.startOpacity($("photoalbum_slideshow_photo_name"), this.opacityRatio * -1);
		}
	},

	isChangingOpacity: function(element) {
		var opacity = Element.getStyle(element, "opacity");
		if (opacity < 0.99
				&& opacity > 0) {
			return true;
		}

		return false;
	},
	
	startOpacity: function(element, opacityRatio) {
		if (this.isChangingOpacity(element)) {
			return;
		}
		
		var from = Element.getStyle(element, "opacity");
		setTimeout(function(){this.changeOpacity(element, from, opacityRatio);}.bind(this), this.changeOpacityTimerValue);
	},
	
	changeOpacity: function(element, from, opacityRatio) {
		var opacity = from + opacityRatio;
		if (opacity <= 0) {
			opacity = 0;
			Element.addClassName(element, "visible-hide");
		} else {
			Element.removeClassName(element, "visible-hide");

			if (opacity > 1) {
				opacity = 1;
			}
		}
		
		Element.setStyle(element, {"opacity":opacity});

		if (!this.isChangingOpacity(element)) {
			return;
		}

		setTimeout(function(){this.changeOpacity(element, opacity, opacityRatio);}.bind(this), this.changeOpacityTimerValue);
	},

	changePhotoDescriptionDisplay: function() {
		commonCls.displayChange($("photoalbum_photo_description_hide"));
		commonCls.displayChange($("photoalbum_photo_description_show"));

		var description = $("photoalbum_slideshow_photo_description");
		commonCls.displayChange(description);
		if (!Element.hasClassName(description, "display-none")) {
			this.moveDescription();
		}
	}
}
photoalbumSlideshowCls = new clsPhotoalbumSlideshow();
</script>