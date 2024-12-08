

defined('_JEXEC') or die;

if (!JFactory::getUser()->authorise('core.mangae','com_taxcalculation')) {
    return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'))
}

$app = JFactory::getApplication('administrator');

$controller = $app->input->get('controller','default');

$controller->execute($app->input->get('task'));

$controller->redirect();

