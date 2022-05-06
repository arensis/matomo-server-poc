/*!
 * Matomo - free/libre analytics platform
 *
 * Screenshot integration tests.
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

describe("AnonymousPiwikUsageMeasurement", function () {
    this.timeout(0);

    // uncomment this if you want to define a custom fixture to load before the test instead of the default one
    // this.fixture = "Piwik\\Plugins\\AnonymousPiwikUsageMeasurement\\tests\\Fixtures\\YOUR_FIXTURE_NAME";

    before(function () {
        testEnvironment.pluginsToLoad = ['AnonymousPiwikUsageMeasurement'];
        testEnvironment.save();
    });

    let selector = '.card-content:contains(\'AnonymousPiwikUsageMeasurement\')';

    it("should display the admin settings page", async function () {
        await page.goto("?module=CoreAdminHome&action=generalSettings&idSite=1&period=day&date=yesterday");

        expect(await page.screenshotSelector(selector)).to.matchImage('admin_settings_page');
    });

    it("should display the user settings page", async function () {
        await page.goto("?module=UsersManager&action=userSettings&idSite=1&period=day&date=yesterday");

        expect(await page.screenshotSelector(selector)).to.matchImage('user_settings_page');
    });

});