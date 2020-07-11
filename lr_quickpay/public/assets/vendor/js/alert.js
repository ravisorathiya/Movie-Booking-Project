

162

    Event.CLICK_DATA_API,

163

    Selector.DISMISS,

164

    Alert._handleDismiss(new Alert())

165

  )

166

?

167

  /**

168

   * ------------------------------------------------------------------------

169

   * jQuery

170

   * ------------------------------------------------------------------------

171

   */

172

?

173

  $.fn[NAME]             = Alert._jQueryInterface

174

  $.fn[NAME].Constructor = Alert

175

  $.fn[NAME].noConflict  = function () {

176

    $.fn[NAME] = JQUERY_NO_CONFLICT

177

    return Alert._jQueryInterface

178

  }

179

?

180

  return Alert

181

})($)

182

?

183

export default Alert

184

?

;

    Pause on exceptions

