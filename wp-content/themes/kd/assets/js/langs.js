LANGS = {
    'newsletterSuccessHeader': {
        'pl': 'Gratulacje!',
        'en': 'Conagratulations!'
    },
    'newsletterSuccessMessage': {
        'pl': 'Właśnie zapisałeś się do naszego newslettera!',
        'en': 'You have successfully subscribed to our newsletter!'
    },
};

function getLangByKey(key)
{
    return LANGS[key][LANGUAGE];
}
